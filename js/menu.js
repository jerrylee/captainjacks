//Food Menu
angular.module('foodMenu', []).controller('menuList', function($scope){
  $scope.foodMenu = [
    {
      item: "Coconut Shrimp",
      description: "Coconut Shrimp served with sweet chili sauce",
      price: "$12.99"
    },
    {
      item: "Chicken Fried Chicken/Steak",
      description: "Served with mashed potatoes and fresh veggies",
      price: "$11.99"
    },
    {
      item: "Shrimp Basket",
      description: "Served with fries and cocktail sauce",
      price: "$8.99"
    },
    {
      item: "Mushroom Swiss Burger",
      description: "8oz patty with sauteed mushrooms and swiss cheese. Lettuce, tomato, onion. Served with fries",
      price: "$9.99"
    },
    {
      item: "Buffalo Chicken Wrap",
      description: "Coconut Shrimp served with sweet chili sauce",
      price: "$12.99"
    }
  ];
});
