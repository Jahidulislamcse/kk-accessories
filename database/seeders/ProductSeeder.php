<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seeds 4 realistic, high-spec products for each category.
     */
    public function run(): void
    {
        $categoriesData = [
            [
                'name' => 'Hang Tags',
                'slug' => 'hang-tags',
                'image' => 'categories/1759665189_Folded-Hangtags-1.png',
                'products' => [
                    [
                        'name' => 'Luxury Foil Stamped Hang Tag',
                        'cover_image' => 'products/hangtag-foil.jpg',
                        'description' => 'Premium 600 GSM double-thick cotton cardstock with gold metallic foil stamping, embossed brand insignia, and custom waxed cotton string with brass safety pin.',
                    ],
                    [
                        'name' => 'Recycled Kraft Swing Ticket',
                        'cover_image' => 'products/hangtag-kraft.jpg',
                        'description' => 'Eco-friendly 450 GSM recycled kraft paper hang tag featuring soy-based ink printing, reinforced brass eyelet, and natural rustic jute twine.',
                    ],
                    [
                        'name' => 'Die-Cut Soft Touch Matte Hang Tag',
                        'cover_image' => 'products/hangtag-matte.jpg',
                        'description' => 'Matte velvet soft-touch laminated tag with precision die-cut contouring, spot UV glossy branding, and woven polyester ribbon attachment.',
                    ],
                    [
                        'name' => 'Multi-Fold Garment Booklet Tag',
                        'cover_image' => 'products/hangtag-booklet.jpg',
                        'description' => 'Multi-page accordion folded hang tag booklet containing brand storytelling, sustainability credentials, and fabric care certifications.',
                    ],
                ],
            ],
            [
                'name' => 'Care Lables',
                'slug' => 'care-lables',
                'image' => 'categories/1759665645_care-labels-printed-k.jpg',
                'products' => [
                    [
                        'name' => 'Printed Satin Wash Care Label',
                        'cover_image' => 'products/care-satin.jpg',
                        'description' => 'Ultra-soft slit-edge white polyester satin printed with high-resolution laundry wash icons, fiber composition, and multi-language care instructions.',
                    ],
                    [
                        'name' => 'Organic Cotton Content Label',
                        'cover_image' => 'products/care-cotton.jpg',
                        'description' => '100% GOTS certified unbleached natural cotton tape printed with water-based non-toxic inks, gentle against sensitive skin.',
                    ],
                    [
                        'name' => 'High-Density Thermal Transfer Care Label',
                        'cover_image' => 'products/care-thermal.jpg',
                        'description' => 'Crisp black nylon taffeta wash label with anti-fray sonic sealed ultrasonic cut, engineered for industrial laundry wash durability up to 90°C.',
                    ],
                    [
                        'name' => 'Recycled Polyester Eco Care Ribbon',
                        'cover_image' => 'products/care-recycled.jpg',
                        'description' => 'GRS-certified 100% post-consumer recycled satin ribbon with sharp black offset printing, OEKO-TEX Standard 100 Class 1 certified.',
                    ],
                ],
            ],
            [
                'name' => 'Elastic Tape',
                'slug' => 'elastic-tape',
                'image' => 'categories/1763390282_garment-elastic-tape.jpg',
                'products' => [
                    [
                        'name' => 'Jacquard Woven Waistband Elastic',
                        'cover_image' => 'products/elastic-jacquard.jpg',
                        'description' => 'High-recovery polyester-elastane blend with custom jacquard-knitted brand lettering, non-roll edge, and brushed soft backing for activewear.',
                    ],
                    [
                        'name' => 'Anti-Slip Silicone Coated Elastic Webbing',
                        'cover_image' => 'products/elastic-silicone.jpg',
                        'description' => 'Heavy-duty sports elastic band featuring dual wavy silicone grip tracks on the reverse side to prevent garment ride-up in cycling and swimwear.',
                    ],
                    [
                        'name' => 'Knitted Fold-Over Elastic Ribbon',
                        'cover_image' => 'products/elastic-knitted.jpg',
                        'description' => '20mm pliable fold-over elastic with central crease groove for clean seam binding on stretch garments, lingerie, and infant apparel.',
                    ],
                    [
                        'name' => 'High-Tension Braided Cord Elastic',
                        'cover_image' => 'products/elastic-braided.jpg',
                        'description' => 'Durable braided round elastic cord with superior modulus of elasticity and chlorine resistance, ideal for outerwear drawstrings and hoods.',
                    ],
                ],
            ],
            [
                'name' => 'Twill Tapes',
                'slug' => 'twill-tapes',
                'image' => 'categories/1763390173_il_794xN.2302129182_rxtj.jpg',
                'products' => [
                    [
                        'name' => '100% Cotton Herringbone Twill Tape',
                        'cover_image' => 'products/twill-herringbone.jpg',
                        'description' => 'Classic chevron herringbone weave 100% natural cotton twill binding tape, pre-shrunk for neck seam binding and placket stabilization.',
                    ],
                    [
                        'name' => 'Pigment-Dyed Heavy Twill Webbing',
                        'cover_image' => 'products/twill-heavy.jpg',
                        'description' => '32mm heavy-gauge cotton-canvas twill webbing tape with reinforced selvedge edge, designed for cargo pant trims, aprons, and bag straps.',
                    ],
                    [
                        'name' => 'Rotary Screen-Printed Twill Ribbon',
                        'cover_image' => 'products/twill-printed.jpg',
                        'description' => 'Continuous rotary screen-printed brand logo on bleached white twill tape, wash-fast with no color fading or surface cracking.',
                    ],
                    [
                        'name' => 'Contrast Athletic Stripe Twill Piping',
                        'cover_image' => 'products/twill-striped.jpg',
                        'description' => 'Tri-color athletic stripe woven twill tape with high tensile strength for track jackets, athletic jerseys, and side-seam accents.',
                    ],
                ],
            ],
            [
                'name' => 'photo cards - boxes',
                'slug' => 'photo-cards-boxes',
                'image' => 'categories/1763390447_photo cards.png',
                'products' => [
                    [
                        'name' => 'Rigid Magnetic Apparel Presentation Box',
                        'cover_image' => 'products/box-magnetic.jpg',
                        'description' => 'Luxury 1200 GSM grayboard gift box with hidden magnetic clasp closure, matte soft-touch anti-scratch finish, and hot foil stamped logo.',
                    ],
                    [
                        'name' => 'Embossed Lookbook Photo Insert Card',
                        'cover_image' => 'products/card-lookbook.jpg',
                        'description' => '400 GSM art cardstock photographic model card insert with high-gloss UV varnish, showcasing seasonal styling suggestions and care tips.',
                    ],
                    [
                        'name' => 'Eco Kraft Self-Locking Apparel Mailer',
                        'cover_image' => 'products/box-kraft.jpg',
                        'description' => 'Sustainable corrugated E-flute kraft packaging box with tear-strip opening, customized two-sided water-based flexographic print.',
                    ],
                    [
                        'name' => 'Slide Tray Drawer Packaging Box',
                        'cover_image' => 'products/box-drawer.jpg',
                        'description' => 'Drawer-style slide packaging box with ribbon pull-tab, custom velvet-lined insert, engineered for shirts, belts, and luxury trims.',
                    ],
                ],
            ],
            [
                'name' => 'Woven Levels',
                'slug' => 'woven-levels',
                'image' => 'categories/1763390540_woven labels.jpg',
                'products' => [
                    [
                        'name' => 'Ultra-Fine Damask Woven Brand Label',
                        'cover_image' => 'products/woven-damask.jpg',
                        'description' => '50-denier high-density damask weave with heat-sealed ultrasonic soft edges to guarantee zero neck itch and razor-sharp brand typography.',
                    ],
                    [
                        'name' => 'Metallic Lurex Center-Fold Woven Label',
                        'cover_image' => 'products/woven-lurex.jpg',
                        'description' => 'Woven center-fold loop label infused with radiant gold and silver metallic lurex threads for high-end tailoring, outerwear, and knitwear.',
                    ],
                    [
                        'name' => 'Vintage Taffeta Selvedge Woven Label',
                        'cover_image' => 'products/woven-taffeta.jpg',
                        'description' => 'Heritage-style shuttle loom woven label with natural finished woven borders, ideal for denim collections and authentic workwear.',
                    ],
                    [
                        'name' => 'Merrowed Edge Woven Blazer Crest Patch',
                        'cover_image' => 'products/woven-crest.jpg',
                        'description' => 'Heavy-duty woven blazer emblem with traditional merrowed embroidered border and iron-on thermo-adhesive backing for garment bonding.',
                    ],
                ],
            ],
            [
                'name' => 'Lace Trimming',
                'slug' => 'lace-trimming',
                'image' => 'categories/1763391006_Lace-Trimming-3cab6714.jpeg',
                'products' => [
                    [
                        'name' => '100% Cotton Scalloped Crochet Lace',
                        'cover_image' => 'products/lace-crochet.jpg',
                        'description' => 'Vintage botanical floral pattern crochet lace trim made from combed cotton yarns, pre-shrunk for dress hems, lingerie, and bohemian blouses.',
                    ],
                    [
                        'name' => 'Delicate Eyelash Scallop Bridal Lace',
                        'cover_image' => 'products/lace-eyelash.jpg',
                        'description' => 'Intricate polyamide eyelash lace with fine corded contour outlines, designed for luxury eveningwear, sleeves, and neckline borders.',
                    ],
                    [
                        'name' => 'Elastic Floral Stretch Lace Ribbon',
                        'cover_image' => 'products/lace-stretch.jpg',
                        'description' => '15% elastane multi-directional stretch lace ribbon with soft touch and excellent recovery for intimates, bodysuits, and swimwear.',
                    ],
                    [
                        'name' => 'Guipure Water-Soluble Chemical Lace',
                        'cover_image' => 'products/lace-guipure.jpg',
                        'description' => 'Heavyweight free-standing guipure lace trim without mesh backing, creating a three-dimensional sculpted embroidery appearance.',
                    ],
                ],
            ],
            [
                'name' => 'Zippers',
                'slug' => 'zippers',
                'image' => 'categories/1763391148_zipper1-big_Big.jpg',
                'products' => [
                    [
                        'name' => '#5 Antique Brass Metal Teeth Zipper',
                        'cover_image' => 'products/zipper-brass.jpg',
                        'description' => 'Heavy-duty polished Y-teeth antique brass zipper with auto-lock slider, mounted on durable pre-shrunk cotton tape for denim and jackets.',
                    ],
                    [
                        'name' => 'Waterproof Matte PU Coated Nylon Zipper',
                        'cover_image' => 'products/zipper-waterproof.jpg',
                        'description' => 'Reverse-coil #5 nylon zip with seamless TPU laminated waterproof seal and rubberized ergonomic puller for technical skiwear and raincoats.',
                    ],
                    [
                        'name' => 'Custom Engraved Zinc Alloy Zipper Puller',
                        'cover_image' => 'products/zipper-puller.jpg',
                        'description' => 'Zinc alloy die-cast custom zipper puller with laser-engraved 3D brand logo, available in gunmetal, matte black, and electroplated gold.',
                    ],
                    [
                        'name' => 'Invisible Concealed Nylon Dress Zipper',
                        'cover_image' => 'products/zipper-invisible.jpg',
                        'description' => '#3 fine spiral teeth invisible zip with tear-drop slider, designed to remain fully hidden inside side seams of dresses and trousers.',
                    ],
                ],
            ],
            [
                'name' => 'Heat Transfer & Silicone Patches',
                'slug' => 'heat-transfer-patches',
                'image' => 'categories/1763391457_silicone-heat-transfer-patches-sheet-abc2000-australia.png',
                'products' => [
                    [
                        'name' => '3D Molded High-Density Silicone Patch',
                        'cover_image' => 'products/patch-silicone.jpg',
                        'description' => 'Raised 1.5mm 3D dimensional silicone emblem with micro-textured matte background, bonded via hot-melt adhesive at 150°C for performance wear.',
                    ],
                    [
                        'name' => 'Reflective Laser-Cut Heat Seal Transfer',
                        'cover_image' => 'products/patch-reflective.jpg',
                        'description' => 'EN ISO 20471 certified high-candlepower glass bead reflective transfer film with multi-color screen printing for nighttime athletic visibility.',
                    ],
                    [
                        'name' => 'Matte TPU Embossed Crest Badge',
                        'cover_image' => 'products/patch-tpu.jpg',
                        'description' => 'Thermoplastic polyurethane high-frequency welded crest patch with faux-metallic textures, resistant to over 50 commercial laundry cycles.',
                    ],
                    [
                        'name' => 'Sublimated Flocked Chenille Emblem',
                        'cover_image' => 'products/patch-chenille.jpg',
                        'description' => 'Retro collegiate varsity chenille embroidery badge combined with high-detail sublimated twill base and twill border.',
                    ],
                ],
            ],
            [
                'name' => 'Metal Badges',
                'slug' => 'metal-badges',
                'image' => 'categories/1763391629_Metal Badge.jpg',
                'products' => [
                    [
                        'name' => 'Custom Die-Cast Zinc Alloy Metal Badge',
                        'cover_image' => 'products/metal-badge.jpg',
                        'description' => 'Precision die-cast zinc metal emblem with brushed antique nickel plating, dual rear prongs and butterfly clutch for jacket lapels and bags.',
                    ],
                    [
                        'name' => 'Engraved Metal Shank Blazer Button',
                        'cover_image' => 'products/metal-button.jpg',
                        'description' => 'Solid brass 24L shank button with deep CNC diamond-cut crest motif, lead-free and nickel-free compliant with European REACH standards.',
                    ],
                    [
                        'name' => 'Heavy-Duty 4-Part Snap Fastener Button',
                        'cover_image' => 'products/metal-snap.jpg',
                        'description' => '4-part spring snap fastener button set for heavy denim, parkas, and leather goods, featuring consistent 40N opening/closing pull force.',
                    ],
                    [
                        'name' => 'Enamel Filled Brand Nameplate Plaque',
                        'cover_image' => 'products/metal-enamel.jpg',
                        'description' => 'Polished gold metal plate filled with hard jewelry-grade cloisonné enamel, secured with dual rivet screws for leather patches and bags.',
                    ],
                ],
            ],
            [
                'name' => 'Security Tags',
                'slug' => 'security-tags',
                'image' => 'categories/1763391731_a-comprehensive-guide-to-security-tags-everything-you-need-to-know-about-anti-theft-security-tags.jpg',
                'products' => [
                    [
                        'name' => 'Dual Frequency RFID Smart Garment Tag',
                        'cover_image' => 'products/security-rfid.jpg',
                        'description' => 'UHF EPC Gen2 (860-960 MHz) inventory tracking inlay combined with retail EAS antitheft loop, readable up to 8 meters for automated tracking.',
                    ],
                    [
                        'name' => 'Mini Hard Anti-Theft Pencil Tag',
                        'cover_image' => 'products/security-pencil.jpg',
                        'description' => 'Lightweight 58 KHz AM frequency pencil tag with grooved steel pin, formulated with tamper-resistant ABS plastic casing to prevent theft.',
                    ],
                    [
                        'name' => 'Adhesive EAS Barcode Deactivable Label',
                        'cover_image' => 'products/security-barcode.jpg',
                        'description' => '8.2 MHz RF security barcode sticker label with simulated UPC barcode, deactivated instantly at checkout point-of-sale scanner pads.',
                    ],
                    [
                        'name' => 'Tamper-Evident Void Security Seal',
                        'cover_image' => 'products/security-seal.jpg',
                        'description' => 'Holographic serial numbered security tape seal that reveals irreversible "VOID OPENED" text pattern upon unauthorized removal.',
                    ],
                ],
            ],
        ];

        foreach ($categoriesData as $catData) {
            // Find existing category by slug or name, or create it
            $category = Category::where('slug', $catData['slug'])
                ->orWhere('name', $catData['name'])
                ->first();

            if (!$category) {
                $category = Category::create([
                    'name' => $catData['name'],
                    'slug' => $catData['slug'],
                    'image' => $catData['image'],
                ]);
            } else {
                if (empty($category->slug)) {
                    $category->slug = $catData['slug'];
                }
                if (empty($category->image) && !empty($catData['image'])) {
                    $category->image = $catData['image'];
                }
                $category->save();
            }

            // Seed 4 products for this category
            foreach ($catData['products'] as $prodData) {
                $productSlug = Str::slug($prodData['name']);

                Product::updateOrCreate(
                    [
                        'category_id' => $category->id,
                        'name' => $prodData['name'],
                    ],
                    [
                        'slug' => $productSlug,
                        'cover_image' => $prodData['cover_image'],
                        'description' => $prodData['description'],
                    ]
                );
            }
        }
    }
}
