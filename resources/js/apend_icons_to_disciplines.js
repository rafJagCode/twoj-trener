var icons = {
    'Siłowy' : 'bodybuilding.png',
    'Kalisteniczny' : 'calisthenics.png',
    'Crossfit' : 'crossfit.png',
    'Kettlebar' : 'kettlebell.png',
    'Wytrzymałościowy' : 'cardio.png',
    'Streetching' : 'streetching.png',
    'Fitnes' : 'fitness.png',
    'Interwałowy' : 'intervals.png',
    'FBW' : 'fbw.png'
}
//"{{ asset('/images/bodybuilding.png') }}"
$('.my-label p').each(function(i){
    $(".discipline:nth-of-type("+(i+1)+") img").attr("src","/images/"+icons[this.innerText]);
});
