// angular.module('myApp', []).controller('myController', function ($scope) {
//     $scope.photoSrc = "img/civic.jpg";

//     $scope.changePhoto = function (src) {
//         $scope.photoSrc = src.replace("/254/","150", "/100%/","/350/");
//     };
// });
$(document).ready(function(){
    // $('.R').click(function(){
    //     $(this).css({
    //         'cursor': 'pointer',
    //         'border': '1px solid red'
    //     });
    //     var src= $(this).attr('src');
    //     $('#photo').attr('src', src);
    // });
    
    $('.R').click(function(){
        var src = $(this).attr('src');
        $('#photo').attr('src',src);
    })

});