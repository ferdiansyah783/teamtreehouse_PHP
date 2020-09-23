var database={
    "menu":{
        "dropdown":{
            "value":{
                "xiomi":["#"],
                "OPPO":["#"],
                "Samsung":["#"],
                "Realme":["#"]
            }
        },
        "link":{
            "value":{
                "Home":["#"],
                "Menu":["#"],
                "Produk":["#"],
                "Rekomendasi":["#"]
            }
        }
    }
};

// database.menu.dropdown.value.forEach(el=>{
//     alert(el);
// });

var menu_dropdown_temp="";
var menu_dropdown_key=Object.keys(database.menu.dropdown.value);

for(x=0;x<menu_dropdown_key.length;x++){
    // alert(menu_dropdown_key[x]);
    menu_dropdown_temp+=`<a class="dropdown-item" herf="`+database.menu.dropdown.value[menu_dropdown_key[x]]+`">`+menu_dropdown_key[x]+`</a>`;
}
$('#menu_dropdown').html(menu_dropdown_temp);
// 
var menu_link_temp="";
var menu_link_key=Object.keys(database.menu.link.value);

for(x=0;x<menu_link_key.length;x++){
    // alert(menu_dropdown_key[x]);
    menu_link_temp+=`<li class="nav-item active">
    <a class="nav-link" href="`+database.menu.link.value[menu_link_key[x]]+`"><span style="color: black;">
    `+menu_link_key[x]+` <span style="color: blue;">|</span> </span> <span class="sr-only">(current)</span></a>
  </li>`;
}
$('#menu_link').append(menu_link_temp);

