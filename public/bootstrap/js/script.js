var channelName="Lahiru Ariyasinghe";
$(document).ready(function(){

	$.get{
		"https://www.googleapis.com/youtube/v3/channels",{
			part:"contentDetails",
			forUsername:channelName,
			key:'AIzaSyCT98uxMxrbCIXGCpKy2gmUECq7Yu9xHhA'},
			function(data){
$.each(data.items,function(i,item){

	console.log(item);
	pid = item.contentDetails.relatedPlaylists.uploads;
	getVids(pid);
})
}
};
function getVids(pid){
	$.get{
		"https://www.googleapis.com/youtube/v3/playlistItems",{
			part:"snippet",
			maxResults:10,
			playlistId=pid,
			key:'AIzaSyCT98uxMxrbCIXGCpKy2gmUECq7Yu9xHhA'},
			function(data){
				var output;
$.each(data.items,function(i,item){

	console.log(item);
	videoTitle = item.snippet.title;

	output = '<li><iframe src=\"//www.youtube.com/embed/'+videoId+'\"></iframe></li>';


	$('#results').append(output);
})
}
};
}
)};