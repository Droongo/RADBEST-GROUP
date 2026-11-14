<?php

/*
|--------------------------------------------------------------------------
| Gallery page photos (in display order)
|--------------------------------------------------------------------------
| file    : name inside public/assets/img/ — the thumbnail is served from
|           assets/img/t/{file}, the lightbox loads assets/img/{file}
| cat     : filter category (coffee | trading | manufacturing)
| label   : badge shown on the tile
| caption : caption + alt text
| w, h    : thumbnail dimensions (masonry.js derives row spans from them)
*/

return [

    'categories' => [
        'coffee' => 'Coffee',
        'trading' => 'Trading & furniture',
        'manufacturing' => 'Manufacturing',
    ],

    'photos' => [
        ['file' => 'coffee-aerial.jpg', 'cat' => 'coffee', 'label' => 'Origin', 'caption' => 'Raised drying beds from above', 'w' => 800, 'h' => 450],
        ['file' => 'coffee-cherries-field.jpg', 'cat' => 'coffee', 'label' => 'Harvest', 'caption' => 'Ripe cherries on the drying bed', 'w' => 800, 'h' => 450],
        ['file' => 'coffee-cherries-hands.jpg', 'cat' => 'coffee', 'label' => 'Harvest', 'caption' => 'Freshly picked cherries', 'w' => 600, 'h' => 800],
        ['file' => 'coffee-women-beds.jpg', 'cat' => 'coffee', 'label' => 'Process', 'caption' => 'Hand-sorting natural coffee', 'w' => 600, 'h' => 800],
        ['file' => 'coffee-beds-wide.jpg', 'cat' => 'coffee', 'label' => 'Origin', 'caption' => 'Drying beds at the washing station', 'w' => 600, 'h' => 800],
        ['file' => 'coffee-green-hands.jpg', 'cat' => 'coffee', 'label' => 'Process', 'caption' => 'Washed green beans', 'w' => 600, 'h' => 800],
        ['file' => 'coffee-washed-beans.jpg', 'cat' => 'coffee', 'label' => 'Process', 'caption' => 'Washed parchment drying', 'w' => 600, 'h' => 800],
        ['file' => 'coffee-washing-channel.jpg', 'cat' => 'coffee', 'label' => 'Process', 'caption' => 'Washing channel at the station', 'w' => 416, 'h' => 800],
        ['file' => 'coffee-cherries-close.jpg', 'cat' => 'coffee', 'label' => 'Harvest', 'caption' => 'Selecting ripe cherries', 'w' => 600, 'h' => 800],
        ['file' => 'coffee-smelling.jpg', 'cat' => 'coffee', 'label' => 'Quality', 'caption' => 'Checking aroma at the beds', 'w' => 800, 'h' => 576],
        ['file' => 'coffee-tasting.jpg', 'cat' => 'coffee', 'label' => 'Quality', 'caption' => 'Quality checks at origin', 'w' => 800, 'h' => 351],
        ['file' => 'coffee-team-workers.jpg', 'cat' => 'coffee', 'label' => 'Origin', 'caption' => 'The team and workers at the beds', 'w' => 800, 'h' => 450],
        ['file' => 'trade-exec-1.jpg', 'cat' => 'trading', 'label' => 'Executive', 'caption' => 'Executive office suite', 'w' => 800, 'h' => 449],
        ['file' => 'trade-meeting-2.jpg', 'cat' => 'trading', 'label' => 'Meeting', 'caption' => 'Boardroom table and chairs', 'w' => 800, 'h' => 454],
        ['file' => 'trade-lounge.jpg', 'cat' => 'trading', 'label' => 'Lounge', 'caption' => 'Leather lounge seating', 'w' => 800, 'h' => 450],
        ['file' => 'trade-desk-corner.jpg', 'cat' => 'trading', 'label' => 'Executive', 'caption' => 'Executive desk detail', 'w' => 450, 'h' => 800],
        ['file' => 'trade-office-furniture.jpg', 'cat' => 'trading', 'label' => 'Executive', 'caption' => 'Luxury executive desk', 'w' => 684, 'h' => 520],
        ['file' => 'trade-glass.jpg', 'cat' => 'trading', 'label' => 'Interiors', 'caption' => 'Glass partitions and timber panelling', 'w' => 684, 'h' => 521],
        ['file' => 'trade-lighting.jpg', 'cat' => 'trading', 'label' => 'Interiors', 'caption' => 'FSL LED ceiling lighting', 'w' => 684, 'h' => 526],
        ['file' => 'trade-chair-shelf.jpg', 'cat' => 'trading', 'label' => 'Seating', 'caption' => 'High-back executive chair', 'w' => 449, 'h' => 800],
        ['file' => 'trade-meeting-1.jpg', 'cat' => 'trading', 'label' => 'Meeting', 'caption' => 'Meeting table in the showroom', 'w' => 800, 'h' => 450],
        ['file' => 'trade-table-detail.jpg', 'cat' => 'trading', 'label' => 'Meeting', 'caption' => 'Table with integrated power modules', 'w' => 800, 'h' => 459],
        ['file' => 'trade-armchairs.jpg', 'cat' => 'trading', 'label' => 'Lounge', 'caption' => 'Reception armchairs', 'w' => 800, 'h' => 450],
        ['file' => 'trade-exec-2.jpg', 'cat' => 'trading', 'label' => 'Executive', 'caption' => 'Executive desk and credenza', 'w' => 800, 'h' => 447],
        ['file' => 'trade-cladding.jpg', 'cat' => 'trading', 'label' => 'Interiors', 'caption' => 'Exterior façade cladding', 'w' => 800, 'h' => 618],
        ['file' => 'trade-meeting-chairs.jpg', 'cat' => 'trading', 'label' => 'Seating', 'caption' => 'Ergonomic meeting chairs', 'w' => 800, 'h' => 460],
        ['file' => 'trade-carpet.jpg', 'cat' => 'trading', 'label' => 'Interiors', 'caption' => 'Commercial carpet tiles', 'w' => 800, 'h' => 617],
        ['file' => 'trade-chair-detail.jpg', 'cat' => 'trading', 'label' => 'Seating', 'caption' => 'Leather chair detail', 'w' => 800, 'h' => 451],
        ['file' => 'trade-exec-3.jpg', 'cat' => 'trading', 'label' => 'Executive', 'caption' => 'Executive desk with guest chairs', 'w' => 800, 'h' => 450],
        ['file' => 'trade-blinds.jpg', 'cat' => 'trading', 'label' => 'Interiors', 'caption' => 'Window blind systems', 'w' => 800, 'h' => 443],
        ['file' => 'trade-chair-desk.jpg', 'cat' => 'trading', 'label' => 'Executive', 'caption' => 'Executive chair and desk', 'w' => 800, 'h' => 450],
        ['file' => 'trade-sealant.jpg', 'cat' => 'trading', 'label' => 'Interiors', 'caption' => 'Wacker silicone sealant', 'w' => 800, 'h' => 620],
        ['file' => 'mfg-thread.jpg', 'cat' => 'manufacturing', 'label' => 'Thread', 'caption' => 'Dyed thread in every colour', 'w' => 800, 'h' => 533],
        ['file' => 'mfg-ribbons-3.jpg', 'cat' => 'manufacturing', 'label' => 'Tapes', 'caption' => 'Jacquard woven elastic', 'w' => 533, 'h' => 800],
        ['file' => 'mfg-spinning.jpg', 'cat' => 'manufacturing', 'label' => 'Factory', 'caption' => 'Spinning line', 'w' => 533, 'h' => 800],
        ['file' => 'mfg-ribbons-1.jpg', 'cat' => 'manufacturing', 'label' => 'Tapes', 'caption' => 'Patterned woven tapes', 'w' => 533, 'h' => 800],
        ['file' => 'mfg-yarn-cones.jpg', 'cat' => 'manufacturing', 'label' => 'Yarn', 'caption' => 'Yarn cones on the creel', 'w' => 650, 'h' => 800],
        ['file' => 'mfg-ribbons-2.jpg', 'cat' => 'manufacturing', 'label' => 'Tapes', 'caption' => 'Elastic bands and tapes', 'w' => 533, 'h' => 800],
        ['file' => 'mfg-lace.jpg', 'cat' => 'manufacturing', 'label' => 'Trims', 'caption' => 'Lace and trims', 'w' => 533, 'h' => 800],
        ['file' => 'coffee-team-sorting.jpg', 'cat' => 'coffee', 'label' => 'Team', 'caption' => 'RAD Best team sorting cherries', 'w' => 800, 'h' => 600],
        ['file' => 'coffee-team-bed.jpg', 'cat' => 'coffee', 'label' => 'Team', 'caption' => 'Turning cherries on the bed', 'w' => 600, 'h' => 800],
    ],

];
