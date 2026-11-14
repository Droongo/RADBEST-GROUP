import { $, $$ } from '../utils/dom';

/* ---------- contact form (contact page only) ----------
   The original built a mailto: link. The form now posts to
   POST /contact (ContactController@store), which validates, stores the
   enquiry and emails it to the team. With JavaScript the request is sent
   with fetch() and the result is shown in the same .form-msg box; without
   JavaScript the form submits normally and the server renders the message. */
const form = $('#contact-form');
if (form) {
    const msg = $('.form-msg', form);
    const button = $('button[type=submit]', form);
    const say = function (text) { msg.textContent = text; msg.classList.add('show'); };

    form.addEventListener('submit', async function (e) {
        e.preventDefault();
        if (button.disabled) return;
        button.disabled = true;

        try {
            const res = await fetch(form.action, {
                method: 'POST',
                headers: { Accept: 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                body: new FormData(form),
            });
            const data = await res.json().catch(function () { return {}; });

            if (res.ok) {
                say(data.message);
                form.reset();
            } else if (res.status === 422 && data.errors) {
                say(Object.values(data.errors).flat().join(' '));
            } else if (res.status === 419) {
                say('Your session expired. Please refresh the page and send your message again.');
            } else if (res.status === 429) {
                say('You have sent several messages in a short time. Please wait a minute, or call us on +251 90 344 4440.');
            } else {
                say('Sorry, your message could not be sent right now. Please call us on +251 90 344 4440 or email info@radbesttrading.com.');
            }
        } catch (err) {
            say('Could not reach the server. Please check your connection, or call us on +251 90 344 4440.');
        } finally {
            button.disabled = false;
        }
    });
}

/* ---------- FAQ: one open at a time ---------- */
const faqs = $$('#faq details');
faqs.forEach(function (d) {
    d.addEventListener('toggle', function () {
        if (d.open) faqs.forEach(function (o) { if (o !== d) o.open = false; });
    });
});
