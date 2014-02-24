//map
jQuery('#registermap').vectorMap({
    map: 'world_en',
    backgroundColor: '',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    color: '#f4f3f0',
    enableZoom: true,
    hoverColor: '#c9dfaf',
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegion: 'US',
    showTooltip: true,
    onRegionClick: function(element, code, region)
    {
        $('#registerform #contry').val(region) ;
        
        $('#registerform').modal() ;
    }
});


jQuery( document ).ready(function() {
    
    var height = $(window).height() ;
    var navheight = $('.navbar').height() ;
    var footer = $('footer').height() ;
    
    height = height - ( navheight + footer ) ;
    $('#registermap').height(height) ;
    
});
