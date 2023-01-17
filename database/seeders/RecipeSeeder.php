<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        DB::table('recipes')->insert([
            [
                'user_id' => 2,
                'name' => 'Amalfi Lemon & Polenta Cake',
                'photo' => 'Amalfi.jpg',
                'description' => 'This incredible cake celebrates one of the key ingredients of the Amalfi coast – the beautiful Amalfi lemon. I’ve made an amazing lemon syrup by boiling it whole to create an almost marmalade-y depth of flavour, so you get more of that lovely citrus joy. I then blitz the whole thing with extra virgin olive oil, to really up that Mediterranean vibe.',
                'ingredients' => '
                    <p>1 Amalfi lemon</p>
                    <p>250 ml extra virgin olive oil , plus extra for greasing</p>
                    <p>4 large free-range eggs</p>
                    <p>250 g caster sugar</p>
                    <p>250 g ground almonds</p>
                    <p>100 g fine polenta</p>
                    <p>&nbsp;</p>
                    <p>SYRUP</p>
                    <p>150 g runny honey</p>
                    <p>1 Amalfi lemon</p>
                    <p>&nbsp;</p>
                    <p>MASCARPONE CREAM</p>
                    <p>200 g mascarpone</p>
                    <p>2 teaspoons icing sugar</p>
                    <p>2 teaspoons vanilla paste</p>
                    <p>50 g natural yoghurt</p>
                    <p>&nbsp;</p>
                    <p>TO SERVE</p>
                    <p>1 tablespoons flaked almonds</p>
                    <p>optional: 3 sprigs of fresh lemon balm or thyme, or a little grated lemon zest</p>
                ',
                'instructions' => '
                    <p><strong>Step <span>1</span></strong><span><br />Place</span> the whole lemon into a large deep saucepan, cover with cold water and a small heatproof plate (to keep the lemon submerged). Place the pan on a medium heat, bring to a simmer and cook for 20 minutes, or until the lemon is soft. (You might need to top up with more water, if the water evaporates too much.)</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 2<br /></strong>Drain the lemon and set aside to cool completely, then cut it into quarters removing any pips. Place the lemon quarters into a blender or food processor, then blitz with the extra virgin olive oil until smooth.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 3<br /></strong>Preheat the oven to 160&deg;C/325&deg;F/gas 3. Grease and line a deep 20cm cake tin (or 12 x 10cm cake tins).</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 4<br /></strong>Whisk the eggs and sugar together in a large bowl, then whisk in the lemon and oil pur&eacute;e, the ground almonds and polenta. Pour the mixture into the prepared tin(s), spread out evenly with a palette knife and bake for 40 to 45 minutes (20 minutes if you&rsquo;re making individual cakes), or until risen and golden and a skewer inserted into the middle comes out clean. Leave to cool in the tin, then turn out onto a wire rack and leave to cool completely.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 5<br /></strong>Meanwhile, make the lemon syrup: place the honey in a small pan on a medium-low heat and squeeze in the lemon juice. Bring to a simmer and cook, stirring, for 4 to 5 minutes, until the honey has melted. (You may need to add a splash of hot water if it looks too thick.) Remove from the heat and set aside to cool.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 6<br /></strong>To make the mascarpone cream, beat the mascarpone, icing sugar and vanilla paste together, then gently fold in the yoghurt and set aside.</p>
                ',
                'servings' => 3,
                'prep_time' => 100,
                'cook_time' => 20,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'name' => 'Chocolate Strawberry Cheesecake',
                'photo' => 'Chocolate Strawberry Cheesecake.jpg',
                'description' => 'So creamy and good - the strawberry flavor really comes through in the cheesecake and the chocolate crust and ganache work great with the strawberries. You will Love this!',
                'ingredients' => '
                    <p><span>Crust:</span></p>
                    <ul>
                    <li><span>cooking spray</span></li>
                    <li><span>1 (9 ounce) box chocolate wafer cookies (such as Nabisco&reg; Famous Chocolate Wafers)</span></li>
                    <li><span>5 tablespoons unsalted butter, melted</span></li>
                    <li><span>3 tablespoons granulated sugar</span></li>
                    </ul>
                    <p><span>&nbsp;</span></p>
                    <p><span>Cheesecake:</span></p>
                    <ul>
                    <li><span>1 cup chopped fresh strawberries</span></li>
                    <li><span>5 (8 ounce) packages cream cheese, softened</span></li>
                    <li><span>&frac12; cup granulated sugar</span></li>
                    <li><span>3 tablespoons all-purpose flour</span></li>
                    <li><span>5 large eggs</span></li>
                    <li><span>2 large egg yolks</span></li>
                    <li><span>2 teaspoons vanilla extract</span></li>
                    <li><span>1 teaspoon lemon zest</span></li>
                    <li><span>1 tablespoon freshly squeezed lemon juice</span></li>
                    <li><span>2 drops pink gel food coloring</span></li>
                    </ul>
                    <p><span>&nbsp;</span></p>
                    <p><span>Chocolate Ganache:</span></p>
                    <ul>
                    <li><span>1 cup heavy whipping cream</span></li>
                    <li><span>1 (4 ounce) bar semisweet chocolate, finely chopped</span></li>
                    <li><span>1 (4 ounce) bittersweet chocolate, finely chopped</span></li>
                    <li><span>10 whole and halved strawberries, for garnish</span></li>
                    </ul>
                ',
                'instructions' => '
                    <p><strong>Step 1<br /></strong>Preheat the oven to 325 degrees F (165 degrees C). Wrap outside of a lightly greased (with cooking spray) 9-inch springform pan with a double layer of heavy-duty aluminum foil.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 2<br /></strong>Stir together cookies, melted butter, and granulated sugar in a bowl. Press onto bottom and 1-inch up sides of prepared pan.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 3<br /></strong>Bake in the preheated oven until crust is set, 7 to 8 minutes. Transfer to a wire rack; cool completely, 30 minutes.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 4<br /></strong>Preheat the oven again to 325 degrees F (165 degrees C).</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 5<br /></strong>Process chopped strawberries in a food processor until completely smooth, about 1 minute, stopping to scrape down sides as needed. Set strawberry puree aside.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 6<br /></strong>Beat cream cheese with a stand mixer fitted with a paddle attachment on medium speed until creamy, 2 to 3 minutes. Gradually add sugar and flour, beating until smooth, about 1 minute. Add whole eggs, 1 at a time, beating on low speed just until blended after each addition (do not overbeat). Add egg yolks, 1 at a time, beating until just blended after each addition. Beat in reserved strawberry puree, vanilla, lemon zest, and lemon juice on low speed just until combined. Gently stir in food coloring gel until desired shade is reached.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 7<br /></strong>Pour batter into the prepared pan (pan will be full). Place cheesecake in a large roasting pan. Place roasting pan with cheesecake in preheated oven and pour very hot water into roasting pan half-way up sides of cheesecake.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 8<br /></strong>Bake in the preheated oven until center is almost set but still wobbly, 1 hour and 10 minutes to 1 hour and 20 minutes. Turn oven off, and let cheesecake stand in oven, with door closed, 15 minutes.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 9<br /></strong>Remove cheesecake from oven, and gently run a knife around outer edge of cheesecake to loosen from sides of pan. (Do not remove sides of pan.) Cool completely in pan on a wire rack, about 2 hours. Cover with aluminum foil; chill 8 to 24 hours.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 10<br /></strong>Prepare Chocolate Ganache Topping: Bring cream to a light simmer in a small saucepan over medium. Place chopped chocolate in a small heatproof bowl. Pour hot cream over chocolate in bowl and let stand 1 minute. Whisk chocolate mixture until completely smooth. Let mixture cool until very slightly warm, whisking occasionally, about 20 minutes.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 11<br /></strong>Assemble Cheesecake: Dip a few whole strawberries in ganache and chill until ready to top cheesecake. Remove sides of pan from cheesecake and place on a serving platter. Slowly pour ganache over top of cheesecake, spreading to edges with a small offset spatula. Chill for 1 hour.</p>
                    <p>&nbsp;</p>
                    <p><strong>Step 12<br /></strong>Top cheesecake with whole and halved strawberries and chocolate-dipped strawberries.</p>
                ',
                'servings' => 1,
                'prep_time' => 60,
                'cook_time' => 120,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'name' => 'Blueberry Cornmeal Skillet Cake',
                'photo' => 'Blueberry cornmeal skillet cake.webp',
                'description' => 'This is a brilliant oven-to-table dish: simply bake in a cast-iron skillet and serve warm, straight from the pan, topped with vanilla ice cream. Alternatively, if you want to serve this cut into slices, more like a cake, line the base of your pan with baking paper first, so you an easily lift it out once baked.',
                'ingredients' => '
                    <ul>
                    <li>150 g unsalted butter , (at room temperature), plus extra for greasing</li>
                    <li>200 g caster sugar</li>
                    <li>1 lemon</li>
                    <li>150 g fine cornmeal</li>
                    <li>150 g ground almonds</li>
                    <li>&frac12; teaspoon baking powder</li>
                    <li>4 large free-range eggs</li>
                    <li>2 teaspoons vanilla extract</li>
                    <li>200 g blueberries</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>Preheat the oven to 190&ordm;C/375&ordm;F/gas 5. Grease a 25cm round cast-iron skillet or cake tin with a little butter.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Place the sugar in a large mixing bowl, finely grate in the lemon zest and rub together with your fingers &ndash; this will release the oils and increase the flavour.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Add the rest of the ingredients, except the blueberries, and mix into a smooth batter. Scrape it into the skillet or tin and spread out evenly. Scatter over the berries and bake for 35 to 40 minutes, until the cake springs back when lightly pressed.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Remove from the oven and allow to cool a little before serving. Delicious served warm with scoops of vanilla ice cream</p>
                ',
                'servings' => 4,
                'prep_time' => 60,
                'cook_time' => 60,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'name' => 'Ricotta & Almond Cake',
                'photo' => 'Ricotta & almond cake.webp',
                'description' => 'This is the only cake I’ve ever baked in my life. It was a cake that was run as a special at Palatino and every time I made it, it sank. I did it at home and, instead of baking it in a cake tin, I did it in a tray and it worked. So here. Here’s a cake recipe. I hope it doesn’t sink.',
                'ingredients' => '
                    <ul>
                    <li>400 g caster sugar (14oz)</li>
                    <li>350 g unsalted butter (12oz)</li>
                    <li>200 g ricotta (7oz)</li>
                    <li>6 free-range eggs</li>
                    <li>2 lemons, zest and juice of</li>
                    <li>600 g ground almonds (1lb 5oz)</li>
                    <li>1 teaspoon baking powder</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>Preheat the oven to 180&deg;C fan/200&deg;C/350&deg;F/gas mark 4. Place the sugar and butter in the bowl of a food mixer with a whisk attachment and cream together &ndash; you want the butter to be fluffy but smooth.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>In a separate bowl, fold together the ricotta, eggs, lemon juice and lemon zest. It&rsquo;s gonna look like it&rsquo;s split, but it&rsquo;s fine &ndash; trust me.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>With the mixer still mixing the sugar and butter, slowly add in the ricotta and egg mix little by little, then turn off the mixer. Add the ground almonds and baking powder but do this by hand as we want to keep the cake batter nice and airy. If you do this in the mixer, you&rsquo;ll knock out all the air and the cake will sink.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Line a high-edged baking tray (28 x 23 x 5cm/11 x 8 x 2in) with greaseproof paper, then pour in the cake batter and spread it out so that the top is nice and level. Bake in the oven for 1 hour and 10 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Let the cake rest once it&rsquo;s cooked. It&rsquo;s quite a moist cake so it will look underdone when you cut into it, but it&rsquo;s delicious. Promise.</p>
                ',
                'servings' => 2,
                'prep_time' => 30,
                'cook_time' => 130,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'name' => 'Pumpkin Roll',
                'photo' => 'Pumpkin Roll.webp',
                'description' => "Try this pumpkin roll recipe for a standout holiday dessert! A moist, spiced pumpkin sheet cake is spread with a vanilla cream cheese filling, then rolled up and dusted with powdered sugar for an after-dinner treat that's both elegant and delicious.",
                'ingredients' => '
                    <p>Pumpkin Cake:</p>
                    <ul>
                    <li>1 cup white sugar</li>
                    <li>⅔ cup pumpkin puree</li>
                    <li>3 large eggs, beaten</li>
                    <li>&frac12; teaspoon ground cinnamon</li>
                    <li>&frac34; cup all-purpose flour</li>
                    <li>1 teaspoon baking soda</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Cream Cheese Filling:</p>
                    <ul>
                    <li>8 ounces cream cheese, softened</li>
                    <li>1 cup powdered sugar, or more to taste</li>
                    <li>2 tablespoons butter, softened</li>
                    <li>&frac14; teaspoon vanilla extract</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>Preheat the oven to 375 degrees F (190 degrees C). Grease a 10x15-inch jelly roll pan.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Make cake: Blend together sugar, pumpkin puree, eggs, and cinnamon in a mixing bowl.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Mix flour and baking soda together in a separate bowl. Add flour mixture to pumpkin mixture and blend until smooth. Evenly spread in the prepared pan.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Bake in the preheated oven until cake springs back when lightly touched, 15 to 25 minutes. Remove from the oven and cool for 5 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Invert cake onto a cotton (not terry cloth) tea towel. Starting with a short edge, roll up cake in the towel jelly-roll style; place seam-side down to cool, about 15 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 6</p>
                    <p>While the cake is cooling, make filling: Beat cream cheese, powdered sugar, butter, and vanilla in a mixing bowl until smooth.</p>
                    <p>&nbsp;</p>
                    <p>Step 7</p>
                    <p>When cake has completely cooled, unroll and remove towel. Spread filling over cake, all the way to the edges. Roll cake up again without the towel. Wrap with plastic wrap and refrigerate until ready to serve.</p>
                    <p>&nbsp;</p>
                    <p>Step 8</p>
                    <p>To serve, sift powdered sugar over the roll and slice into 10 portions.</p>
                ',
                'servings' => 10,
                'prep_time' => 15,
                'cook_time' => 55,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'name' => 'Banana Cake',
                'photo' => 'banana cake.webp',
                'description' => 'This banana cake was made for me by a friend while I was visiting her after she had delivered her 11th child. I told her, "I should have baked for you!"',
                'ingredients' => "
                    <p>Cake:</p>
                    <ul>
                    <li>1 &frac12; cups mashed bananas</li>
                    <li>2 teaspoons lemon juice</li>
                    <li>3 cups all-purpose flour</li>
                    <li>1 &frac12; teaspoons baking soda</li>
                    <li>&frac14; teaspoon salt</li>
                    <li>2 ⅛ cups white sugar</li>
                    <li>&frac34; cup butter</li>
                    <li>3 eggs</li>
                    <li>2 teaspoons vanilla extract</li>
                    <li>1 &frac12; cups buttermilk</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Frosting:</p>
                    <ul>
                    <li>&frac12; cup butter, softened</li>
                    <li>1 (8 ounce) package cream cheese, softened</li>
                    <li>1 teaspoon vanilla extract</li>
                    <li>3 &frac12; cups confectioners' sugar</li>
                    </ul>
                ",
                'instructions' => '
                    <p>Step 1</p>
                    <p>Preheat the oven to 275 degrees F (135 degrees C). Grease and flour a 9x13-inch pan.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Make cake: Mix mashed bananas with lemon juice in a small bowl. Mix flour, baking soda, and salt in a medium bowl.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Cream sugar and butter in a large bowl until light and fluffy, 3 to 4 minutes. Beat in eggs one at a time, then stir in vanilla. Beat in flour mixture alternately with buttermilk. Stir in banana mixture. Pour batter into the prepared pan.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Bake in the preheated oven until a toothpick inserted into the center of the cake comes out clean, about 1 hour. Remove cake from the oven and place it directly into the freezer for 45 minutes. This will make the cake very moist.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Meanwhile, make frosting: Cream butter and cream cheese until smooth. Beat in vanilla. Add confectioners sugar and beat on low speed until combined, then on high until frosting is smooth.</p>
                    <p>&nbsp;</p>
                    <p>Step 6</p>
                    <p>Spread frosting on cooled cake.</p>
                ',
                'servings' => 18,
                'prep_time' => 30,
                'cook_time' => 135,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'name' => 'Kung Pao Chicken',
                'photo' => 'kung pao.jpg',
                'description' => 'Make Kung Pao Chicken better than Chinese take out right at home! With crisp-tender, mouthwatering chicken pieces swimming in the most delicious silky Chinese sauce exploding with flavour, this is one Kung Pao chicken recipe hard to pass up!',
                'ingredients' => '
                    <ul>
                    <li>2 tablespoons cornstarch, dissolved in 2 tablespoons water</li>
                    <li>2 tablespoons white wine, divided</li>
                    <li>2 tablespoons soy sauce, divided</li>
                    <li>2 tablespoons sesame oil, divided</li>
                    <li>1 pound skinless, boneless chicken breast halves - cut into chunks</li>
                    <li>1 ounce hot chile paste</li>
                    <li>2 teaspoons brown sugar</li>
                    <li>1 teaspoon distilled white vinegar</li>
                    <li>1 (8 ounce) can water chestnuts</li>
                    <li>4 ounces chopped peanuts</li>
                    <li>4 green onions, chopped</li>
                    <li>1 tablespoon chopped garlic</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>Combine water and cornstarch in a cup; set aside.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Combine 1 tablespoon wine, 1 tablespoon soy sauce, 1 tablespoon sesame oil, and 1 tablespoon cornstarch/water mixture in a large glass bowl. Add chicken pieces and toss to coat. Cover the dish and refrigerate for about 30 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Combine remaining 1 tablespoon wine, 1 tablespoon soy sauce, 1 tablespoon sesame oil, and remaining cornstarch/water mixture in a medium bowl. Whisk in chile paste, brown sugar, and vinegar. Add water chestnuts, peanuts, green onions, and garlic and toss to coat.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Transfer water chestnut mixture to a medium skillet. Heat slowly over medium heat until aromatic.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Meanwhile, transfer chicken from marinade into a large skillet; cook over medium-high heat, stirring, until chicken is cooked through and juices run clear.</p>
                    <p>&nbsp;</p>
                    <p>Step 6</p>
                    <p>Combine water chestnut mixture and saut&eacute;ed chicken together in one skillet. Adjust heat and simmer together until sauce thickens.</p>
                ',
                'servings' => 4,
                'prep_time' => 30,
                'cook_time' => 90,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'name' => 'Restaurant Style Egg Drop Soup',
                'photo' => 'Restaurant Style Egg Drop Soup.webp',
                'description' => 'This chicken egg drop soup is born from a love of the soup, many trips to my favorite Chinese restaurant, and many questions. This variation is the result. Simplicity is the key. The soup can be reheated or frozen and reheated.',
                'ingredients' => '
                    <ul>
                    <li>4 cups chicken broth, divided</li>
                    <li>2 tablespoons chopped fresh chives</li>
                    <li>&frac14; teaspoon salt</li>
                    <li>⅛ teaspoon ground ginger</li>
                    <li>1 &frac12; tablespoons cornstarch</li>
                    <li>2 eggs</li>
                    <li>1 egg yolk</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>Reserve 3/4 cup of chicken broth, and pour the rest into a large saucepan. Stir in chives, salt, and ginger; bring to a rolling boil. Stir reserved 3/4 cup of broth and cornstarch until smooth. Set aside.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Whisk eggs and egg yolk together in a small bowl with a fork. Using a fork, drizzle eggs, a little at a time, into boiling broth. Eggs will cook immediately. Stir in cornstarch mixture gradually until soup reaches desired consistency.</p>
                ',
                'servings' => 4,
                'prep_time' => 10,
                'cook_time' => 20,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'name' => 'Mongolian Beef and Spring Onions',
                'photo' => 'mongol beef.webp',
                'description' => 'This Mongolian beef recipe with green onions has a soy-based sauce for a Chinese-style beef dish. Best served over soft rice noodles or rice.',
                'ingredients' => '<p>Not given</p>',
                'instructions' => '
                    <p>Step 1</p>
                    <p>Heat 2 teaspoons of vegetable oil in a saucepan over medium heat. Add garlic and ginger; cook and stir until fragrant, about 30 seconds. Stir in brown sugar, soy sauce, and water. Increase heat to medium-high; stir until sauce boils and slightly thickens, about 4 minutes. Remove sauce from the heat and set aside.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Place beef into a large bowl; add cornstarch and mix until beef is thoroughly coated. Set aside until most of the cornstarch has been absorbed, about 10 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Heat vegetable oil in a deep skillet to 375 degrees F (190 degrees C).</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Shake excess cornstarch from beef slices and drop into hot oil, a few at a time, stirring briefly and frying until edges become crisp, about 2 minutes. Remove beef with a large slotted spoon; drain on paper towels.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Remove excess oil from the skillet, then heat the skillet over medium heat; add beef slices and stir in prepared sauce. Add green onions and bring to a boil; cook until the onions have just softened and are bright green, about 1 to 2 minutes.</p>
                ',
                'servings' => 4,
                'prep_time' => 15,
                'cook_time' => 35,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'name' => 'Thai Coconut Curry Ramen',
                'photo' => 'thai coconut curry ramen.jpg',
                'description' => 'Goodbye summer! It is finally cool enough so I can sit in my chair with all my chunky sweaters and slurp up all the steaming ramen noodles and this out-of-this-world red curry coconut broth. The broth is simply perfection alongside the crumbled pork topping and soft boiled eggs, easily made right in your IP as you simmer your heavenly ramen broth. And this ramen comes together fast, making it the perfect weeknight meal for the entire family.',
                'ingredients' => '
                    <ul>
                    <li>2 3.5-ounce packages instant ramen noodles, flavor packets discarded</li>
                    <li>1 &frac12; tablespoons canola oil</li>
                    <li>2 medium shallots, diced</li>
                    <li>3 tablespoons red curry paste</li>
                    <li>2 tablespoons tomato paste</li>
                    <li>2 cloves garlic, minced</li>
                    <li>1 tablespoon freshly grated ginger</li>
                    <li>1 13.5-ounce can coconut milk</li>
                    <li>4 cups chicken stock</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>In a large pot of boiling water, cook noodles until just tender, about 2-3 minutes. Rinse under cold water and drain; set aside.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Heat canola oil in a large stockpot or Dutch oven over medium heat. Add shallot, and cook, stirring frequently, until tender, about 3 minutes. Stir in curry paste, tomato paste, garlic and ginger until fragrant, about 2 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Stir in coconut milk and chicken stock. Bring to a boil; reduce heat, cover and simmer until flavors have blended, about 8-10 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Heat sesame oil in a large skillet over medium high heat. Add pork, garlic and fresno chili. Cook until pork has browned, about 3-5 minutes, making sure to crumble the pork as it cooks. Stir in fish sauce; season with salt and pepper, to taste.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Divide noodles and broth into bowls. Top with pork, soft boiled eggs, cilantro, green onions and sesame seeds.</p>
                ',
                'servings' => 4,
                'prep_time' => 15,
                'cook_time' => 30,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'name' => 'Korean Chicken Bowls',
                'photo' => 'korean chicken bowls.jpg',
                'description' => 'Juicy, flavorful Korean chicken bowls made with the easiest marinade ever! Serve with your choice of grain/rice and desired toppings! It has protein and tons of veggies, not to mention, it’s perfectly hearty and filling.',
                'ingredients' => '
                    <p>For the chicken</p>
                    <ul>
                    <li>&frac12; small pear, peeled and coarsely grated</li>
                    <li>&frac14; cup reduced sodium soy sauce</li>
                    <li>3 tablespoons chopped fresh cilantro leaves</li>
                    <li>2 tablespoons gochujang, Korean red pepper paste</li>
                    <li>2 tablespoons toasted sesame oil</li>
                    <li>1 tablespoon light brown sugar</li>
                    <li>1 tablespoon freshly grated ginger</li>
                    <li>3 cloves garlic, minced</li>
                    <li>1 &frac12; pounds boneless skinless chicken thighs</li>
                    <li>1 tablespoon canola oil</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>For the kimchi</p>
                    <ul>
                    <li>2 teaspoons sesame oil</li>
                    <li>1 cup chopped kimchi</li>
                    <li>1 teaspoon sugar</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>For the bowls</p>
                    <ul>
                    <li>1 cup jasmine rice</li>
                    <li>1 &frac12; cups shredded purple cabbage</li>
                    <li>2 carrots, peeled and grated</li>
                    <li>1 avocado, halved, peeled, seeded and thinly sliced</li>
                    <li>1 cup pack fresh cilantro leaves</li>
                    <li>4 soft-boiled eggs</li>
                    <li>2 green onions, thinly sliced</li>
                    <li>1 teaspoon toasted sesame seeds</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>FOR THE CHICKEN: In a medium bowl, combine pear, soy sauce, cilantro, gochujang, sesame oil, brown sugar, ginger and garlic. In a gallon size Ziploc bag, combine soy sauce mixture and chicken; marinate for at least 2 hours to overnight, turning the bag occasionally.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Preheat grill to medium heat. Drain the chicken from the marinade; brush with canola oil. Add chicken to grill, and cook, turning occasionally, until chicken is completely cooked through, reaching an internal temperature of 165 degrees F, about 10 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>FOR THE KIMCHI: Heat sesame oil in small skillet over medium high heat. Add kimchi and sugar, and cook, stirring constantly, until caramelized and heated through, about 3-5 minutes; set aside.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>FOR THE BOWLS: Cook jasmine rice according to package instructions.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Divide rice into bowls. Top with chicken, kimchi, cabbage, carrots, avocado, cilantro and eggs, garnished with green onions and sesame seeds, if desired.</p>
                ',
                'servings' => 1,
                'prep_time' => 30,
                'cook_time' => 105,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'name' => 'Indian Chicken Murgh Kari',
                'photo' => 'murgh kari.webp',
                'description' => 'Enjoy the lavishly delicious taste of chicken curry at home with this easy-to-follow recipe. Bold spices like ginger, cumin, and curry powder add rich layers of flavor to succulent chicken coated in a creamy tomato-based sauce. Fill your kitchen with the delightful fragrance of a creamy, spicy, and filling curry that the whole family will love.',
                'ingredients' => '
                    <ul>
                    <li>2 pounds skinless, boneless chicken breast halves</li>
                    <li>2 teaspoons salt</li>
                    <li>&frac12; cup cooking oil</li>
                    <li>1 &frac12; cups chopped onion</li>
                    <li>1 tablespoon minced garlic</li>
                    <li>1 &frac12; teaspoons minced fresh ginger root</li>
                    <li>1 tablespoon curry powder</li>
                    <li>1 teaspoon ground cumin</li>
                    <li>1 teaspoon ground turmeric</li>
                    <li>1 teaspoon ground coriander</li>
                    <li>1 teaspoon cayenne pepper</li>
                    <li>1 tablespoon water</li>
                    <li>1 (15 ounce) can crushed tomatoes</li>
                    <li>1 cup plain yogurt</li>
                    <li>1 tablespoon chopped fresh cilantro</li>
                    <li>1 teaspoon salt</li>
                    <li>&frac12; cup water</li>
                    <li>1 teaspoon garam masala</li>
                    <li>1 tablespoon chopped fresh cilantro</li>
                    <li>1 tablespoon fresh lemon juice</li>
                    </ul>
                ',
                'instructions' => '
                    <ul>
                    <li>
                    <p>Step 1</p>
                    <p>Sprinkle the chicken breasts with 2 teaspoons salt.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Heat oil in a large skillet over high heat; partially cook the chicken in the hot oil in batches until completely browned on all sides. Transfer browned chicken breasts to a plate and set aside.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Reduce the heat to medium and add onion, garlic, and ginger to the oil remaining in the skillet. Cook and stir until onion turns soft and translucent, 5 to 8 minutes. Stir curry powder, cumin, turmeric, coriander, cayenne, and 1 tablespoon of water into the onion mixture; allow to heat together for about 1 minute while stirring. Add tomatoes, yogurt, 1 tablespoon chopped cilantro, and 1 teaspoon salt to the mixture; stir to combine.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Return chicken breast to the skillet along with any juices on the plate. Pour in 1/2 cup water and bring to a boil, turning the chicken to coat with the sauce. Sprinkle garam masala and 1 tablespoon cilantro over the chicken.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Cover the skillet and simmer until chicken breasts are no longer pink in the center and the juices run clear, about 20 minutes. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C). Drizzle with lemon juice to serve.</p>
                    </li>
                    </ul>
                ',
                'servings' => 6,
                'prep_time' => 20,
                'cook_time' => 60,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'name' => 'Mulligatawny Soup',
                'photo' => 'Mulligatawny Soup.jpg',
                'description' => 'Mulligatawny soup means "pepper water," and curry is the particular ingredient that gives this incredible dish such a delicious flavor, or so I am told. This old recipe was given to me long ago.',
                'ingredients' => '
                    <ul>
                    <li>&frac12; cup chopped onion</li>
                    <li>2 stalks celery, chopped</li>
                    <li>1 carrot, diced</li>
                    <li>&frac14; cup butter</li>
                    <li>1 &frac12; tablespoons all-purpose flour</li>
                    <li>1 &frac12; teaspoons curry powder</li>
                    <li>4 cups chicken broth</li>
                    <li>&frac12; apple, cored and chopped</li>
                    <li>&frac14; cup white rice</li>
                    <li>1 skinless, boneless chicken breast half - cut into cubes</li>
                    <li>1 pinch dried thyme</li>
                    <li>salt and ground black pepper to taste</li>
                    <li>&frac12; cup heavy cream, heated</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>Melt butter in a large soup pot over medium heat. Add onions, celery, and carrot and saut&eacute; until soft, 5 to 7 minutes. Add flour and curry, and cook 5 more minutes, stirring frequently. Add chicken broth, mix well, and bring to a boil. Reduce heat and simmer for about 30 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Add apple, rice, chicken, thyme, salt, and pepper. Simmer until rice is tender, 15 to 20 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Just before serving, stir in hot cream.</p>
                ',
                'servings' => 6,
                'prep_time' => 25,
                'cook_time' => 140,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'name' => 'Chicken Satay with Peanut Sauce',
                'photo' => 'Chicken-Satay.jpg',
                'description' => 'Perfectly grilled chicken satay skewers in the most flavorful marinade. Served with the best creamy zesty peanut-lime sauce ever.',
                'ingredients' => '
                    <ul>
                    <li>&frac14; cup coconut milk</li>
                    <li>2 tablespoons reduced sodium soy sauce</li>
                    <li>2 &frac12; teaspoons yellow curry powder</li>
                    <li>1 &frac12; teaspoons turmeric</li>
                    <li>3 cloves garlic, minced</li>
                    <li>1 tablespoon freshly grated ginger</li>
                    <li>1 tablespoon brown sugar</li>
                    <li>1 tablespoon fish sauce</li>
                    <li>2 pounds boneless, skinless chicken thighs, cut into 1-inch chunks</li>
                    <li>1 tablespoon canola oil</li>
                    <li>Kosher salt and freshly ground black pepper, to taste</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Peanut Sauce</p>
                    <ul>
                    <li>3 tablespoons creamy peanut butter</li>
                    <li>1 tablespoon reduced sodium soy sauce</li>
                    <li>1 tablespoon freshly squeezed lime juice</li>
                    <li>2 teaspoons brown sugar</li>
                    <li>2 teaspoons chili garlic sauce, or more, to taste</li>
                    </ul>
                    <p>1 teaspoon freshly grated ginger</p>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>To make the peanut sauce, whisk together peanut butter, soy sauce, lime juice, brown sugar, chili garlic sauce and ginger in a small bowl. Whisk in 2-3 tablespoons water until desired consistency is reached; set aside.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>In a medium bowl, combine coconut milk, soy sauce, curry powder, turmeric, garlic, ginger, brown sugar and fish sauce.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>In a gallon size Ziploc bag or large bowl, combine chicken and coconut milk mixture; marinate for at least 2 hours to overnight, turning the bag occasionally.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Drain the chicken from the marinade, discarding the marinade.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Preheat grill to medium high heat. Thread chicken onto skewers. Brush with canola oil; season with salt and pepper, to taste.</p>
                    <p>&nbsp;</p>
                    <p>Step 6</p>
                    <p>Add skewers to grill, and cook, turning occasionally, until the chicken is completely cooked through, reaching an internal temperature of 165 degrees F, about 12-15 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 7</p>
                    <p>Serve immediately with peanut sauce.</p>
                ',
                'servings' => 6,
                'prep_time' => 45,
                'cook_time' => 170,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 4,
                'name' => 'Instant Pot Pho',
                'photo' => 'Instant-Pot-Pho.jpg',
                'description' => 'How to quickly (and easily) make restaurant-quality pho right at home in the pressure cooker in less than 1 hour! The broth comes out perfectly – so flavorful and comforting. You can’t beat that!',
                'ingredients' => '
                    <ul>
                    <li>1 tablespoon canola oil</li>
                    <li>1 large sweet onion, quartered</li>
                    <li>1 2-inch piece ginger, sliced</li>
                    <li>2 cloves garlic, smashed</li>
                    <li>3 whole cloves</li>
                    <li>2 star anise pods</li>
                    <li>1 cinnamon stick</li>
                    <li>1 teaspoon ground cardamom</li>
                    <li>1 teaspoon ground coriander</li>
                    <li>&frac12; teaspoon black peppercorns</li>
                    <li>1 &frac12; pounds bone-in chicken thighs, skin removed</li>
                    <li>4 cups chicken stock</li>
                    <li>2 tablespoons fish sauce</li>
                    <li>1 &frac12; teaspoons brown sugar</li>
                    <li>Kosher salt and freshly ground black pepper, to taste</li>
                    <li>8 ounces rice noodles</li>
                    <li>1 cup bean sprouts</li>
                    <li>1 cup fresh basil leaves</li>
                    <li>1 cup torn mint leaves</li>
                    <li>1 Thai bird chili pepper, thinly sliced</li>
                    <li>1 lime, cut into wedges</li>
                    </ul>
                ',
                'instructions' => '
                    <p>Step 1</p>
                    <p>Set 6-qt Instant Pot&reg; to the high saute setting. Heat canola oil; add onion, ginger and garlic. Cook, stirring frequently, until browned, about 4-5 minutes.</p>
                    <p>&nbsp;</p>
                    <p>Step 2</p>
                    <p>Stir in cloves, star anise pods, cinnamon, cardamom, coriander and peppercorns until fragrant, about 1 minute.</p>
                    <p>&nbsp;</p>
                    <p>Step 3</p>
                    <p>Stir in chicken thighs, chicken stock, fish sauce, brown sugar, 1/2 teaspoon salt and 2 cups water. Select manual setting; adjust pressure to high, and set time for 15 minutes. When finished cooking, quick-release pressure according to manufacturer&rsquo;s directions.</p>
                    <p>&nbsp;</p>
                    <p>Step 4</p>
                    <p>Remove chicken from the Instant Pot&reg; and shred, using two forks; set aside.</p>
                    <p>&nbsp;</p>
                    <p>Step 5</p>
                    <p>Strain broth through a fine-mesh sieve lined with cheesecloth; discard solids. Skim any remaining fat from surface and discard; season with salt and pepper, to taste.</p>
                    <p>&nbsp;</p>
                    <p>Step 6</p>
                    <p>In a large pot of boiling water, cook noodles according to package instructions; drain well.</p>
                    <p>&nbsp;</p>
                    <p>Step 7</p>
                    <p>Divide noodles and chicken into serving bowls. Ladle over the broth mixture and serve immediately, garnished with bean sprouts, basil, mint, chili pepper and lime.</p>
                ',
                'servings' => 5,
                'prep_time' => 20,
                'cook_time' => 60,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
