const players = {};
 
 function initPlayer(iframe,url,src) {
  console.log(iframe,url,src)
  var options={
    muted:false,
    hideControls:true                
  }
  // const player = new Vimeo.Player(iframe,options);
  
  players[iframe] =new Plyr(url,options)
  //console.log(player)
  //player.ready().then(function() {
    players[iframe].on('ready', function(event) {
    console.log("player ready for the video  !");
    $("#"+iframe).next().hide() //.fadeOut(300);
    $("#"+iframe).show();
    //url.
    players[iframe].muted = false;
    players[iframe].play();
  });
  console.log(players)
}

function parser_of_url(url){
  var regExp = /(http:|https:|)\/\/(player.|www.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com))\/(video\/|embed\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/g;
  var match = regExp.exec(url);
  if (match){
      console.log(match)
         return match[6];
  }else{
          alert('BAD');
  }
}

$(".playvid").click(function(){
  console.log("click",$(this))
  var datasrc = $(this).attr("embed-id");
  var vsrc = $(this).attr("provider");
  var vid=parser_of_url(datasrc)
  $(this).parent().attr("video-id","v-"+vid)
  $(this).prev().attr("id","v-"+vid)
  initPlayer($(this).prev().attr("id"),$(this).prev().children(),vsrc)
  
})


$(window).on('scroll', function () {

     // if(players['play2']!= null){
      
      $('.play-video-on-scroll').each(function () {
    
        var $this = $(this);
        var v_index=$(this).attr("video-id");
        if(v_index){

        var top_of_element = $(this).offset().top;
        var bottom_of_element = $(this).offset().top + $(this).outerHeight();
        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        var top_of_screen = $(window).scrollTop();
    
        if (bottom_of_screen > top_of_element && top_of_screen < bottom_of_element) {
          if(players[v_index].paused){
          players[v_index].muted = false;
          players[v_index].play();
          }
        } else {
          if(players[v_index].playing){
          players[v_index].muted = true;
          players[v_index].pause();
          }
        }
      }
      });
      //}
    });