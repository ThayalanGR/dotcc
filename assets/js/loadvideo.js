function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}


function constructVideosDomTree(videoslist) {
    const videosListItems = videoslist.items[0]
    const player = document.getElementById('loadPlayer')  
    const title = document.getElementById('loadTitle')
    const desc = document.getElementById('loadDesc')
    if (videosListItems) {
        let videoId = videosListItems.id
        // let vidThumbnail = item.snippet.thumbnails.standard.url
        let vidTitle = videosListItems.snippet.localized.title
        let vidDescription = videosListItems.snippet.localized.description
        let output = `<iframe class="embed-responsive-item" type="text/html"
        src="https://www.youtube.com/embed/${videoId}"
        frameborder="0" allowfullscreen>`
        player.innerHTML = output
        title.innerHTML = vidTitle
        desc.innerHTML = vidDescription
    } else {
        player.innerHTML = 'No Videos found';
    }
  
  }

$(document).ready(function(){
    const videoId = getUrlVars()["videoId"]
    const data = {
        part: "snippet,contentDetails",
        key: "AIzaSyDK7Zf2-_GkU5RrxsvPRTN7-YKxGEDfwrU",
        maxResults: 1
    }
    const url = `https://www.googleapis.com/youtube/v3/videos?part=${data.part}&id=${videoId}&maxResults=${data.maxResults}&key=${data.key}`
    fetch(url).
    then(data=> data.json()).
    then(result=> {
        console.log(result)
        constructVideosDomTree(result)
    }).
    catch(error => console.log(error))
})
