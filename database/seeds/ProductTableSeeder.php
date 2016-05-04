<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

              DB::table('products')->insert([
                  'product_name' => "Loyd's Talisman",
                  'price' => 124,
                  'image_name' => '220px-Talisman_de_Charlemagne_Tau.jpg',
                  'description' => 'Lea Olsan writes of the use of amulets and talisman as prescribed by medical practitioners in the medieval period, citing four doctors that served as primary sources for her research. She explains that the utilization of such charms and prayers (referred to an Empirica in authoritative medical texts) were "rarely a treatment of choice"[5] due to the inability of such treatments to be properly justified in the realm of Galenic medical teachings. Yet, the use of amulets was typically considered acceptable due to the large number of references to their use in the medical literature overall. Through drawing on these references as a guide, Gilbertus, for example, writes of the necessity of using a talisman to ensure conception of a child. He describes the process of producing the talisman, which includes "writing words, some uninterruptable, some biblical, on a parchment to be hung around the neck of the man or woman during intercourse."[6]'
              ]);

              DB::table('products')->insert([
                  'product_name' => "Chimes",
                  'price' => 304,
                  'image_name' => 'C252.jpg',
                  'description' => 'Wind chimes are a type of percussion instrument constructed from suspended tubes, rods, bells or other objects that are often made of metal or wood. The tubes or rods are suspended along with some type of weight or surface which the tubes or rods can strike when they or another wind-catching surface are blown by the natural movement of air outside. They are usually hung outside of a building or residence as a visual and aural garden ornament. Since the percussion instruments are struck according to the random effects of the wind blowing the chimes, wind chimes have been considered an example of chance-based music. The tubes or rods may sound either indistinct pitches, or fairly distinct pitches. Wind chimes that sound fairly distinct pitches can, through the chance movement of air, create simple melodies or broken chords. Wind chimes can be made of materials other than metal or wood and in shapes other than tubes or rods. Other wind chimes materials include glass, bamboo, shell, stone, earthenware, stoneware and porcelain.[8] More exotic items, such as silverware or cookie cutters, can also be recycled to create wind chimes.[9] The selected material can have a large effect on the sound a wind chime produces. The sounds produced by recycling objects such as these are not tunable to specific notes and range from pleasant tinkling to dull thuds. The sounds produced by properly sized wind chime tubes are tunable to notes.[7] As aluminum is the common metal with the lowest internal damping, wind chimes are often made from aluminum to achieve the longest and loudest sounding chime.

  The tone depends on factors such as the material, the exact alloy, heat treatment, and whether a solid cylinder or a tube is used. If a tube is used, the wall thickness also affects the tone. Tone may also depend on the hanging method. The tone quality also depends on the material of the object that is used to hit the chimes.

  With clay wind chimes, the higher the final firing temperature, the higher and more ringing the resulting tone. Earthenware clay fired at lower temperatures produces a duller sound than stoneware clay fired at higher temperatures. Stoneware wind chimes are also more durable and able to resist stronger winds without suffering chipping or damage.'
              ]);

              DB::table('products')->insert([
                  'product_name' => "Simple Gems",
                  'price' => 64,
                  'image_name' => 'b437c3531438fc1d483165c20f5ada6e.jpg',
                  'description' => "There is no universally accepted grading system for gemstones. Diamonds are graded using a system developed by the Gemological Institute of America (GIA) in the early 1950s. Historically, all gemstones were graded using the naked eye. The GIA system included a major innovation: the introduction of 10x magnification as the standard for grading clarity. Other gemstones are still graded using the naked eye (assuming 20/20 vision).[7]

  A mnemonic device, the 'four Cs' (color, cut, clarity and carats), has been introduced to help the consumer understand the factors used to grade a diamond.[8] With modification, these categories can be useful in understanding the grading of all gemstones. The four criteria carry different weight depending upon whether they are applied to colored gemstones or to colorless diamonds. In diamonds, cut is the primary determinant of value, followed by clarity and color. Diamonds are meant to sparkle, to break down light into its constituent rainbow colors (dispersion), chop it up into bright little pieces (scintillation), and deliver it to the eye (brilliance). In its rough crystalline form, a diamond will do none of these things; it requires proper fashioning and this is called 'cut'. In gemstones that have color, including colored diamonds, it is the purity and beauty of that color that is the primary determinant of quality.

  Physical characteristics that make a colored stone valuable are color, clarity to a lesser extent (emeralds will always have a number of inclusions), cut, unusual optical phenomena within the stone such as color zoning (the uneven distribution of coloring within a gem) and asteria (star effects). The Greeks, for example, greatly valued asteria gemstones, which were regarded as powerful love charms, and Helen of Troy was known to have worn star-corundum.[9]

  Aside from the diamond, the ruby, sapphire, emerald, pearl (not, strictly speaking, a gemstone) and opal[10] have also been considered to be precious. Up to the discoveries of bulk amethyst in Brazil in the 19th century, amethyst was considered a precious stone as well, going back to ancient Greece. Even in the last century certain stones such as aquamarine, peridot and cat's eye (cymophane) have been popular and hence been regarded as precious.

  Nowadays such a distinction is no longer made by the gemstone trade.[11] Many gemstones are used in even the most expensive jewelry, depending on the brand name of the designer, fashion trends, market supply, treatments, etc. Nevertheless, diamonds, rubies, sapphires, and emeralds still have a reputation that exceeds those of other gemstones.[12]

  Rare or unusual gemstones, generally meant to include those gemstones which occur so infrequently in gem quality that they are scarcely known except to connoisseurs, include andalusite, axinite, cassiterite, clinohumite and red beryl.

  Gem prices can fluctuate heavily (such as those of tanzanite over the years) or can be quite stable (such as those of diamonds). In general per carat prices of larger stones are higher than those of smaller stones, but popularity of certain sizes of stone can affect prices. Typically prices can range from US$1/carat for a normal amethyst to US$20,000–50,000 for a collector's three carat pigeon-blood almost 'perfect' ruby."

              ]);

              DB::table('products')->insert([
                  'product_name' => "Osmium",
                  'price' => 226,
                  'image_name' => 'tmp457283281289740289.jpg',
                  'description' => 'Osmium (from Greek osme (ὀσμή) meaning "smell") is a chemical element with symbol Os and atomic number 76. It is a hard, brittle, bluish-white transition metal in the platinum group that is found as a trace element in alloys, mostly in platinum ores. Osmium is the densest naturally occurring element, with a density of 22.59 g/cm3. Its alloys with platinum, iridium, and other platinum group metals are employed in fountain pen nibs, electrical contacts, and other applications where extreme durability and hardness are needed.[3]'

              ]);

              DB::table('products')->insert([
                  'product_name' => "Rings",
                  'price' => 120566,
                  'image_name' => 'aeeed4b596d724feff9b24f4331f45ba.jpg',
                  'description' => 'A ring is a round band, usually in metal, worn as an ornamental Jewellery around the finger, or sometimes the toe; it is the most common current meaning of the word "ring". Strictly speaking a normal ring is a finger ring (which may be hyphenated); other types of rings worn as ornaments are earrings, bracelets for the wrist, armlets or arm rings, toe rings and torc or neck rings, but except perhaps for toe rings, the plain term "ring" is not normally used to refer to these.

  Rings are most often made of metal but can be of almost any material: metal, plastic, stone, wood, bone, glass, or gemstone. They may be set with a stone or stones, often a gemstone such as diamond, ruby, sapphire or emerald.'
              ]);

    }
}
