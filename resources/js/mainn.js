const ul = document.querySelector('ul');
let allPages = 3;

function elem(allPages, page){
    let li = '';

    let beforePages = page - 1;
    let afterPages = page + 1;
    let liActive;

    if(page > 1){
        li += `<li class="btn" onclick="elem(allPages, ${page-1})" ><i class="fas fa-angle-left"></i></li>`;
    }

    for (let pageLength = beforePages; pageLength <= afterPages; pageLength++){

        if(pageLength > allPages){
            continue;
        }
        if(pageLength == 0){
            pageLength = pageLength + 1;
        }

        if(page == pageLength){
            liActive = 'active';
        }else{
            liActive = '';
        }

        li += `<li class="numb ${liActive}" onclick="elem(allPages, ${pageLength})" ><span>${pageLength}</span></li>`
    }

    if(page < allPages){
        li += `<li class="btn" onclick="elem(allPages, ${page+1})" ><i class="fas fa-angle-right"></i></li>`;
    }

    ul.innerHTML = li;
}
elem(allPages, 2);
// search
angular.module('myApp', []).controller('namesCtrl', function($scope) {
    $scope.test= null;
    
    $scope.names = [
        'Honda Civic type r'
    ];
    $scope.names1 = [
        'Audi a7'
    ];
    $scope.names2 = [
        'Bmw 320i'
    ];
    $scope.names3 = [
        'Ford Everest'
    ];
    $scope.names4 = [
        'Hyundai Accent'
    ];
    $scope.names5 = [
        'Toyota Camry'
    ];
    $scope.names6 = [
        'Nissan Maxima'
    ];
    $scope.names7 = [
        'MaPorche Panamera 4S Executivery',
    ];
    $scope.names8 = [
        'KaiSuzuki XL7'
    ];
    $scope.names9 = [
        'Mazda 6'
    ];
});
// jquery
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myDIV *").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        
      });
    });
  });