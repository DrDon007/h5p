var video1;
var question1Asked = false;
var question2Asked = false;
var question3Asked = false;

$(document).ready(function(){

	$.featherlight.defaults.afterClose = playPauseVideo;

	video1 = $('#video1');
   

	
     
	$(video1).on('timeupdate', function(){
		var currentTime = Math.round(this.currentTime);
        var choicePart = 10;
	    var choicePart1 = 20;
        var choicePart3 = 30;

        if(currentTime == choicePart && question1Asked == false){
			question1Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion1'))
			$('.q1').click(function(){
	          let answer1 = $("input[type='radio'][name='Question1']:checked").val();
			  setCookie("answer1",answer1,1)
			  $.featherlight.current().close();

			})
		}

        if(currentTime == choicePart1 && question2Asked == false){
			question2Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion2'))
			$('.q2').click(function(){
				let answer2 = $("input[type='radio'][name='Question2']:checked").val();
				console.log(answer2)
				$.featherlight.current().close();  
			  })
		}
        if(currentTime == choicePart3 && question3Asked == false){
			question3Asked = true;
			video1[0].pause();
			$.featherlight($('.popUpQuestion3'))
			$('.q3').click(function(){
				let answer3 = $("input[type='radio'][name='Question3']:checked").val();
				console.log(answer3)
				$.featherlight.current().close();
  
			  })
		}

		

	});

});



function secondsToHms(d) {
	d = Number(d);
	var h = Math.floor(d / 3600);
	var m = Math.floor(d % 3600 / 60);
	var s = Math.floor(d % 3600 % 60);
	return ((h > 0 ? h + ":" + (m < 10 ? "0" : "") : "") + m + ":" + (s < 10 ? "0" : "") + s); 
}

function playPauseVideo(popUp){
	if(video1[0].paused){
		video1[0].play();
	} else{
		video1[0].pause();
		$.featherlight($(popUp));
	}
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}