// const Http = new XMLHttpRequest()
// const url = 'https://jsonplaceholder.typicode.com/posts'
// Http.open("GET", url)
// Http.send()
// Http.onreadystatechange = function() {
//     if(this.readyState == 4 && this.status == 200) {
//         console.log(Http.responseText)
//     }
// }


// $(document).ready(function() {
//     const url = 'http://jsonplaceholder.typicode.com/posts'
//     $.ajax({
//         url: url,
//         type: "GET",
//         success: function(e) {
//             console.log(e)
//         },
//         error:function(e) {
//              console.log(e)
//         }
//     })
// })

$(document).ready(function() {
    
    getPlaylist()
})


function constructVideosDomTree(videoslist) {
    const videosListItems = videoslist.items;
    if (videosListItems) {
        let output = '';
  
        // Loop through videos and append output
        videosListItems.forEach(item => {
          const videoId = item.snippet.resourceId.videoId;
  
          output += `
            <div class="col-md-3 col-sm-12">
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          `;
        });
  
        // Output videos
        videoContainer.innerHTML = output;
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
        maxResults: 10
    }
    const url = ` https://www.googleapis.com/youtube/v3/playlistItems?part=${data.part}&playlistId=${playlistId}&key=${data.key}`
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
        channelId: "UCXgGY0wkgOzynnHvSEVmE3A"
    }
    const url=`https://www.googleapis.com/youtube/v3/playlists?part=${data.part}&channelId=${data.channelId}&maxResults=${data.maxResults}&key=${data.key}`;
    fetch(url).
    then(data=> data.json()).
    then(result=> {
        console.log(result)
        const videolist = result.items[0].id
        console.log(videolist)
        getVideos(videolist)
    }).
    catch(error => console.log(error))
}