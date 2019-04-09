// $.ajax({
//     method: 'GET',
//     url: '/catalog?brend=puma',
//     success: function(response){

//         let ul = document.createElement('ul');
//         response = JSON.parse(response);
//         response.forEach(element => {
//             let li = document.createElement('li');
//             let a = document.createElement('a');
//             a.innerHTML = element;
//             li.appendChild(a); 
//             ul.appendChild(li);
//         }); 
//         $('.catalog').append(ul);
//     }
// });
