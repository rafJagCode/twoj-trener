var icons = {
    'Bodybuilding' : 'bodybuilding.png',
    'Kalistenika' : 'calisthenics.png',
    'Crossfit' : 'crossfit.png',
    'Kettlebel' : 'kettlebell.png',
    'Cardio' : 'cardio.png',
    'Streetching' : 'streetching.png',
    'Fitnes' : 'fitness.png',
    'Interwały' : 'intervals.png',
    'Fbw' : 'fbw.png'
}
//"{{ asset('/images/bodybuilding.png') }}"
$('.my-label p').each(function(i){
    $(".discipline:nth-of-type("+(i+1)+") img").attr("src","/images/"+icons[this.innerText]);
});
