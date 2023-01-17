<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            [
                'course_id' => 1,
                'title' => 'Basic Knife Skills',
                'subtitle' => 'Mastering basic knife skills is one of the most essential parts of cooking, along with keeping your knives sharp',
                'content' => "
                    <p><span>Most recipes require at least a little slicing and dicing. If you're nervous about using kitchen knives (or get daunted watching chefs perfectly&nbsp;chop a butternut squash</span><span>&nbsp;in 10 seconds flat), don't worry. With a little practice, anyone can master&nbsp;good cutting techniques.&nbsp;</span></p>
                    <p><span>The first trick is to learn the proper way to hold a chef's knife. These are the long, heavy knives that are the MVPs of the kitchen. To hold a chef&rsquo;s knife properly, wrap your middle, ring and pinky finger around the handle, and pinch the top edge of the blade between your thumb and forefinger. This will give you a lot of control, especially when you&rsquo;re chopping tough-to-cut items like hard squashes or meat.</span></p>
                    <p><span>When you&rsquo;re a beginner cook, figuring out what to do when a recipe calls for mincing instead of chopping can be half the battle. Here&rsquo;s a rundown of how to manage the most common chopping techniques:</span></p>
                    <p><b>Slice<span>&nbsp;</span></b><span>Slicing means cutting an ingredient into thin, flat pieces, as in a slice of bread or an apple slice.&nbsp;</span></p>
                    <p><b>Dice<span>&nbsp;</span></b><span>As the name suggests, dicing is cutting food into small squares that look like dice. You can dice a vegetable into large pieces (3/4-inch square) or small (1/4-inch square).</span></p>
                    <p><b>Mince<span>&nbsp;</span></b><span>Mincing cuts the food into even smaller pieces than dicing&mdash;think tiny bits that would be hard to pull out of the finished dish. Recipes often call for&nbsp;minced garlic</span><span>&nbsp;or onions.</span></p>
                    <p><b>Chop<span>&nbsp;</span></b><span>Chopping is similar to dicing and mincing food, but results in larger pieces&mdash;like the chunks of potato and carrot in a stew.</span></p>
                    <p><b>Julienne<span>&nbsp;</span></b><span>Also sometimes called the matchstick cut, this slices a vegetable into long, thin strips.&nbsp;</span></p>
                    <p><b>Chiffonade<span>&nbsp;</span></b><span>This technique is used to finely cut herbs or leafy vegetables for a dish. To chiffonade, you make a small stack of leaves, roll them into a tight cylinder, then slice thin rounds from the roll to make ribbons.&nbsp;</span></p>
                ",
            ],
            [
                'course_id' => 1,
                'title' => 'Stovetop Cooking Basics',
                'subtitle' => "Sauté, simmer, and pan-fry your way through a whole range of stovetop recipes",
                'content' => "
                    <p><span>Your stovetop is a crucial part of your cooking arsenal, and many meals&mdash;from pastas to&nbsp;stir-frys&mdash;are fully or partly made on the stove. If you're not up on all the cooking technique terms, here&rsquo;s what a few of the most common ones mean:</span></p>
                    <p><span><strong>Sear</strong>&nbsp;This fast, high-temperature cooking method quickly browns the outside of a cut of meat, helping to seal in the juices.&nbsp;</span></p>
                    <p><b>Saut&eacute;</b><span>&nbsp;A French cooking term that literally means &ldquo;jump,&rdquo; saut&eacute;ing involves cooking your food with a little fat (such as butter or oil) at a high temperature, and stirring or even tossing the food in the pan to help keep it moving.</span><span>&nbsp;</span></p>
                    <p><b>Stir-fry</b><span>&nbsp;Stir-frying is very similar to saut&eacute;ing&mdash;you just use a little more fat than you would to saut&eacute;, and you cook the food at a higher temperature. This is one of the most essential beginner cooking techniques, which you can use for veggies or for tender, quick-cooking cuts of meat like chicken breast.</span></p>
                    <p><b>Steam<span>&nbsp;</span></b><span>When you steam food, you put it in a basket or colander and set it over (but not in!) a pot or pan of boiling water, to allow the steam from the water to cook the ingredient. It&rsquo;s a&nbsp;healthy way to prepare veggies&nbsp;like broccoli, cauliflower and green beans, and is also great for seafood like shrimp, mussels and clams.</span></p>
                    <p><b>Poach<span>&nbsp;</span></b><span>One of the most underrated ways to cook meat and seafood is&nbsp;poaching</span><span>. You simply bring a cooking liquid (like broth or wine) to a simmer, and let your main ingredient cook in it until it&rsquo;s done. Poaching cooks the food without drying it out, so you get moist, perfect results every time. Poached meat and seafood also makes a flavorful, protein-rich ingredient to add to other dishes. Use shredded poached chicken in tacos, or poached shrimp in salads and grain bowls. Master the simple technique for poaching chicken, shrimp or salmon.</span></p>
                ",
            ],
            [
                'course_id' => 1,
                'title' => 'How to Roast Chicken and Vegetables',
                'subtitle' => 'Roasting can be one of the easiest (and tastiest) ways to cook just about any meat or vegetable',
                'content' => "
                    <p><span>Fortunately, certain cooking techniques and tricks can make roasting even simpler and more delicious. For instance, roasting a chicken can take a few hours&mdash;but if you butterfly or spatchcock the chicken first (i.e. make a few cuts and flatten it), you&rsquo;ll reduce the cooking time and still end up with a juicy, flavorful bird.</span><span>&nbsp;Learn&nbsp;how to roast a spatchcocked chicken</span><span>&nbsp;using this simple technique. Love roasted veggies? You can get better results with a few key moves:&nbsp;how to roast a spatchcocked chicken</span><span>, including faster-cooking ones like asparagus and zucchini, medium ones like broccoli and eggplant, and slower ones like potatoes and beets. If you want to perfect your squash game, find out&nbsp;how to peel, cut and roast butternut squash</span><span>. No matter what vegetable you&rsquo;re roasting, you'll be able to tell when it's ready by sticking a knife into the center of a piece. If the knife goes in easily and the edges of the vegetable are a nice golden brown, it&rsquo;s done.</span></p>
                ",
            ],
            [
                'course_id' => 2,
                'title' => 'How to Read (and Pick) a Recipe',
                'subtitle' => 'The most important thing about learning how to cook is to resist perfectionism and redefine what a home-cooked meal is',
                'content' => '
                    <p>Every guide like this starts out with the same advice: Read the recipe all the way to the end before you start cooking anything. That&rsquo;s because even if it feels like kind of a cop move to read and follow the recipe, actually doing so removes much of the stress you might associate with cooking &mdash; which often happens when the pan is searing hot and you realize you need soy sauce right that second. Read the ingredients list too! It tells a story, and all too often hides some of the prep, like chopping onions or grating cheese or even entire sub-recipes (maybe skip anything with sub-recipes). If there&rsquo;s a term you don&rsquo;t understand, google it. Almost every mysterious recipe term has been clearly defined online now.</p>
                    <p>Do your best as a beginner to follow the recipe, but also give yourself permission to deviate if the current situation means you don&rsquo;t have an ingredient or piece of equipment on hand. Every recipe not written during World War II or in spring 2020 assumes a certain American bourgeois abundance. There&rsquo;s been a run on garlic? Your tomato sauce will lack some pleasure, but it will still be tomato sauce. Only a few things will utterly wreck a non-baked good: burning it, undercooking it, oversalting it, or, in certain cases, depriving it of moisture. Undersalting will make things taste flat and disappointing, but you can still eat them. Oil plus salt plus fire is as basic as cooking gets, and if you have those things and something you can cook, you have a meal.</p>
                ',
            ],
        ]);
    }
}
