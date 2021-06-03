//filter skills
$(document).ready(function (){
    //button listeners
    $('.skills-filter-btn').click(function(e){
        //hide all
        $('.skill').addClass('hideSkill');
        //show items including the class
        let categ = $(this).attr('ref');
        $("."+categ).removeClass('hideSkill');
    })
});