




<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Compare Product Description</title>
  <!-- <meta name="description" content="The HTML5 Herald"> -->
  <!-- <meta name="author" content="SitePoint"> -->

   <link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/1410/9094/t/10/assets/stylesheet.css?v=14154971798960021071"> 
<style>

.inner-comparison-container{

	display:flex;
	flex-wrap:nowrap;
	justify-content: space-around;
	margin: 50px;

}
	.preview-pane{
		padding:20px;
		width:600px;
		
		border:1px solid black;
	}
	.preview-pane table,.preview-pane td,.preview-pane tr{

		border:1px solid black;
	}

	.product-link-container{

		margin: 20px 0px;
    background-color: #eee;
    padding: 3px
	}
	#nav{

		width:auto;
		overflow: auto;
		position: relative;
		height:100px;
		padding:5px;

	}
	#nav-position{
		width:auto;
		
		position: absolute;
		right:200px;
	}
	#nav-position a{font-size:2em;}
	.loader {
  margin: 100px auto;
  font-size: 25px;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load5 1.1s infinite ease;
  animation: load5 1.1s infinite ease;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #cd4250, 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.5), -1.8em -1.8em 0 0em rgba(205,66,80, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.7), 1.8em -1.8em 0 0em #cd4250, 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.5), 1.8em -1.8em 0 0em rgba(205,66,80, 0.7), 2.5em 0em 0 0em #cd4250, 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.5), 2.5em 0em 0 0em rgba(205,66,80, 0.7), 1.75em 1.75em 0 0em #cd4250, 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.5), 1.75em 1.75em 0 0em rgba(205,66,80, 0.7), 0em 2.5em 0 0em #cd4250, -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.5), 0em 2.5em 0 0em rgba(205,66,80, 0.7), -1.8em 1.8em 0 0em #cd4250, -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.5), -1.8em 1.8em 0 0em rgba(205,66,80, 0.7), -2.6em 0em 0 0em #cd4250, -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.5), -2.6em 0em 0 0em rgba(205,66,80, 0.7), -1.8em -1.8em 0 0em #cd4250;
  }
}
@keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #cd4250, 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.5), -1.8em -1.8em 0 0em rgba(205,66,80, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.7), 1.8em -1.8em 0 0em #cd4250, 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.5), 1.8em -1.8em 0 0em rgba(205,66,80, 0.7), 2.5em 0em 0 0em #cd4250, 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.5), 2.5em 0em 0 0em rgba(205,66,80, 0.7), 1.75em 1.75em 0 0em #cd4250, 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.5), 1.75em 1.75em 0 0em rgba(205,66,80, 0.7), 0em 2.5em 0 0em #cd4250, -1.8em 1.8em 0 0em rgba(205,66,80, 0.2), -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.5), 0em 2.5em 0 0em rgba(205,66,80, 0.7), -1.8em 1.8em 0 0em #cd4250, -2.6em 0em 0 0em rgba(205,66,80, 0.2), -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.5), -1.8em 1.8em 0 0em rgba(205,66,80, 0.7), -2.6em 0em 0 0em #cd4250, -1.8em -1.8em 0 0em rgba(205,66,80, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(205,66,80, 0.2), 1.8em -1.8em 0 0em rgba(205,66,80, 0.2), 2.5em 0em 0 0em rgba(205,66,80, 0.2), 1.75em 1.75em 0 0em rgba(205,66,80, 0.2), 0em 2.5em 0 0em rgba(205,66,80, 0.2), -1.8em 1.8em 0 0em rgba(205,66,80, 0.5), -2.6em 0em 0 0em rgba(205,66,80, 0.7), -1.8em -1.8em 0 0em #cd4250;
  }
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

#container div{
  border: 1px solid #000000;
  display: flex;
  flex-direction: column;
}

#buttons{
  display: flex;

}

	</style>
<script>

state = (main)=>{
	if(document.ready !== "loading"){
		
		main()
	}
	else{

		document.addEventListener('DOMContentLoaded', main)
	}
}

split =(page, items)=>{
let total = Math.floor(items.length / 40)

if(page === 1) {
  document.querySelector("#back").disabled = true;
  return items.slice(0, 40)}
if(page === total) {
  document.querySelector("#forward").disabled = true;
  return items.slice((total- 1)*40)}
  document.querySelector("#forward").disabled = false;
  document.querySelector("#back").disabled = false
 return items.slice((page - 1) * 40, page*40)

}

showPage = (items)=>{
  let conatiner = document.querySelector("#container");
   conatiner.innerHTML = ""
  items.forEach(x =>{
    let str = `<div>
    <h3>${x.text}<h3>
    <h3 id="author">${x.author}</h3>
    </div>`
    container.innerHTML += str;
  })
  console.log("CC", conatiner)
}

control =  (items) =>{

  let forward = document.querySelector("#forward")
  let back = document.querySelector("#back")
  forward.addEventListener("click", ()=>{
    let current_p = document.querySelector("#current_p").innerHTML
    console.log(Number(current_p) + 1)
    let page_content = split(Number(current_p) + 1, items)
    let showContent =  showPage(page_content)
    document.querySelector("#current_p").innerHTML = Number(current_p) + 1
  })
  back.addEventListener("click", ()=>{
    let current_p = document.querySelector("#current_p").innerHTML
    console.log(Number(current_p) - 1)
    let page_content = split(Number(current_p) - 1, items)
    let showContent =  showPage(page_content)
    document.querySelector("#current_p").innerHTML = Number(current_p) - 1
  })
}

main = ()=>{
	try{
	fetch("https://type.fit/api/quotes").then(res => 
		res.json()).then(async res2 =>{
			if(res2){
		document.querySelector("#loader").style.display = "none";
		console.log(res2)
		let page_content = await split(1, res2)
let showContent = await showPage(page_content)
control(res2)

			}
			else{
				document.querySelector("#container").innerHTML = "<h1>Server error occured</h1>"
			}
	})
} catch(err){
	console.log(err)
}
}

state(main)


</script>
<div class="loader" id='loader'></div>
<div id='buttons'>
<button id="back"><<</button>
<h3>Page <span id="current_p">1</span></h3>
<button id='forward'>>></button>
<div>
<div id="container"></div>
</body>
</html>
