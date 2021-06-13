let content = document.getElementById('content');
// let post =document.getElementsByClassName('post');
let source =  "national-geographic";
const xhr = new XMLHttpRequest();
xhr.open('GET', `https://newsapi.org/v2/top-headlines?sources=${source}&apiKey=b84eb4c0a4554d68ba069a5db96e4517`, true);
xhr.onload = function () {
    if(this.status === 200){
        let json = JSON.parse(this.responseText);
        let articles = json.articles;
        console.log(articles);
        // console.log(json);
        let newsHtml ="<br>";
      articles.forEach(element => {
            let news = `<img src="${element['urlToImage']}" height='350px' width='450px'><br><a href="${element['url']}" target = '_blank'>${element["title"]}</a><br><br><hr><br>`;
            newsHtml += news;
      });
      content.innerHTML = newsHtml;
    }
    else{
        console.log("Some error occured")
    }
}
xhr.send();
