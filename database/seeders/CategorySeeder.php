<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
            "Food and Snacks" => [
                "Breakfast/hot beverage",
                "Grains, rice and dried beans",
                "Candies and Chocolates",
                "Canned, Jarred & Packaged Foods",
                "Cooking oil",
                "Baking ingredients",
                "Yoghurts",
                "Snacks & Beverages",
                "Pasta & Noodles",
                "Condiments & Salad Dressings",
                "Jams, Jellies & Sweet Spreads",
                "Fruit juices",
                "Milk and cheese",
                "Biscuits/crackers",
                "Canned vegetables",
                "Pap & Custard",
                "Crisps and nuts",
                "Sugar & flour",
                "Food supplements"
            ],
            "Drinks" => [
                "Non-Alcoholic drinks/fruit wines",
                "Sodas, minerals & malts",
                "Energy drinks",
                "Fruit juices",
                "Water",
                "Snacks & Beverages"
            ],
            "Flour Milss" => [
                "Semovita/Semolina",
                "Wheat flour",
                "Poundo yam",
                "Garri",
                "Plantain flour",
                "Poundo potatoe"
            ],
            "Alcoholic Drinks" => [
                "Alcoholic Wines",
                "Spirits and Dry Gin",
                "Beers",
                "Vodka, Whiskey and Rum"
            ]
            ,
            "Non-alcoholic Drinks" => [
                "Fruit juices",
                "Non-alcoholic wines",
                "Sodas, minerals and malts",
                "Energy drinks",
                "Water"
            ],
            "Breakfast/breverages" => [
                "Jams, Jellies & Sweet Spreads",
                "Milk and cheese",
                "Pap & Custard",
                "Biscuits/crackers",
                "Yoghurts",
                "Fruit juices",
                "Snacks & Beverages"
            ],
            "House supply" => [
                "Tablet soaps",
                "Powdered soaps & detergents",
                "Liquid soaps",
                "Hand towels",
                "Dental care",
                "Hand sanitizers",
                "Air fresheners",
                "House Cleaning & Polishing",
                "Batteries",
                "Brushware/manchester"
            ],
            "Cooking Ingredients and seasonings" => [
                "Herbs & Spices",
                "Cooking sauce",
                "Cooking oil",
                "Cooking pastes",
                "Liquid seasoning",
                "Salt"
            ],
            "Kitchen Supplies" => [
                "Kitchenware, Pot sets, Cutlery",
                "Dinner set",
                "Kitchen rolls",
                "Serviettes",
                "Plastic containers",
                "Wraps/foils",
                "Lighters & matches"
            ],
            "Tioletries" => [
                "Bathroom accessories",
                "Dental care",
                "Body lotion",
                "Deodorants and perfumes",
                "Toilet paper",
                "Insecticides",
                "Bathing soap",
                "Disinfectants"
            ],
            "Party/Gift items" => [
                "Hamper Gifts",
                "Party accessories",
                "Greeting cards"
            ],
            "Baby Items" => [
                "Baby accessories",
                "Baby Diapers",
                "Baby care",
                "Birth/delivery package"
            ]
        );

        foreach ($categories as $key => $category) {
            $create = Category::create(['name' => $key]);
            foreach ($category as $subCategory) {
                if (Category::where('slug', Str::slug($subCategory))->first()) {
                    continue;
                }
                $create->subCategories()->create(['name' => $subCategory]);
            }
        }
    }
}