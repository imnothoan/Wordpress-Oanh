function real_estate_developer_open_tab(evt, cityName) {
    var real_estate_developer_i, real_estate_developer_tabcontent, real_estate_developer_tablinks;
    real_estate_developer_tabcontent = document.getElementsByClassName("tabcontent");
    for (real_estate_developer_i = 0; real_estate_developer_i < real_estate_developer_tabcontent.length; real_estate_developer_i++) {
        real_estate_developer_tabcontent[real_estate_developer_i].style.display = "none";
    }
    real_estate_developer_tablinks = document.getElementsByClassName("tablinks");
    for (real_estate_developer_i = 0; real_estate_developer_i < real_estate_developer_tablinks.length; real_estate_developer_i++) {
        real_estate_developer_tablinks[real_estate_developer_i].className = real_estate_developer_tablinks[real_estate_developer_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});