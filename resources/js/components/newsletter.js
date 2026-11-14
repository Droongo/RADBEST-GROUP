import { $$ } from '../utils/dom';

/* ---------- footer newsletter ----------
   The original only swapped the button label. The form now posts to
   POST /newsletter (NewsletterController) and shows the same
   "Thank you ✓" label once the address is actually stored.
   Without JavaScript the form submits normally and the page reloads. */
export function initNewsletter() {
    $$('form.news').forEach(function (f) {
        const input = f.querySelector('input[type=email]');
        const button = f.querySelector('button');

        input.addEventListener('input', function () { input.setCustomValidity(''); });

        f.addEventListener('submit', async function (e) {
            e.preventDefault();
            if (button.disabled) return;
            button.disabled = true;

            let message = '';
            try {
                const res = await fetch(f.action, {
                    method: 'POST',
                    headers: { Accept: 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                    body: new FormData(f),
                });
                const data = await res.json().catch(function () { return {}; });

                if (res.ok) {
                    button.textContent = 'Thank you ✓';
                    input.value = '';
                    return;
                }
                if (res.status === 422 && data.errors) message = Object.values(data.errors).flat()[0];
                else if (res.status === 419) message = 'Your session expired. Please refresh the page and try again.';
                else if (res.status === 429) message = 'Too many attempts. Please wait a minute and try again.';
                else message = 'Sorry, something went wrong. Please try again later.';
            } catch (err) {
                message = 'Could not reach the server. Please check your connection and try again.';
            } finally {
                button.disabled = false;
            }

            input.setCustomValidity(message);
            input.reportValidity();
        });
    });
}
