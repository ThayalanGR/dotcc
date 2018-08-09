
$(document).ready(function() {
  getPlaylist()
})


function constructVideosDomTree(videoslist) {
  const videosListItems = videoslist.items
  const videoContainer = document.getElementById('video-container')  

  if (videosListItems) {
      let output = ''
      // Loop through videos and append output
      videosListItems.forEach(item => {
        let videoId = item.snippet.resourceId.videoId
        let vidThumbnail = item.snippet.thumbnails.high.url
        let vidTitle = item.snippet.title
        let vidDescription = item.snippet.description
        len= vidDescription.length
        if(len>80)
        {
          vidDescription = vidDescription.substring(0,80) + '.....';
        }
        output += `
          <div class="col-md-3 col-sm-12 view zoom ">
          <!-- Card -->
              <div class="card hoverable mb-2">

                <!-- Card image -->
                <div class="view overlay">
                  <img class="card-img-top" src="${vidThumbnail}" alt="Card image cap">
                  <a href="playvideo.php?videoId=${videoId}">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!-- Card content -->
                <div class="card-body text-center p-1">
                  <!-- Title -->
                  <h6 class="card-title">${vidTitle}</h6>
                  <!-- Text -->
                  <p class="card-text">${vidDescription}</p>
                  <!-- Button -->
                  <a href="playvideo.php?videoId=${videoId}" class="btn btn-sm btn-primary ">View</a>
                </div>

              </div>
              <!-- Card -->
          
          </div>
        `
      })

      // Output videos
      videoContainer.innerHTML = videoContainer.innerHTML+output;
    } else {
      videoContainer.innerHTML = 'No Uploaded Videos';
    }

}


function getVideos(videolist) {
  const playlistId = videolist
  console.log(playlistId)
  const data = {
      part: "snippet,contentDetails",
      key: "AIzaSyDK7Zf2-_GkU5RrxsvPRTN7-YKxGEDfwrU",
      maxResults: 30
  }
  const url = ` https://www.googleapis.com/youtube/v3/playlistItems?part=${data.part}&playlistId=${playlistId}&maxResults=${data.maxResults}&key=${data.key}`
  fetch(url).
  then(data=> data.json()).
  then(result=> {
      console.log(result)
      constructVideosDomTree(result)
  }).
  catch(error => console.log(error))
}


function getPlaylist() {
  const data = {
      part: "snippet",
      key: "AIzaSyDK7Zf2-_GkU5RrxsvPRTN7-YKxGEDfwrU",
      maxResults: 32,
      channelId: "UCpz3ZDxmYLnLAbt6ptf5W9Q"
  }
  const url=`https://www.googleapis.com/youtube/v3/playlists?part=${data.part}&channelId=${data.channelId}&maxResults=${data.maxResults}&key=${data.key}`;
  fetch(url).
  then(data=> data.json()).
  then(result=> {
      console.log(result)
      let videolist = result.items[1].id
      console.log(videolist)
      getVideos(videolist)
      videolist = result.items[2].id
      console.log(videolist)
      getVideos(videolist)
  }).
  catch(error => console.log(error))
}