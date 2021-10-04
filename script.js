let items = document.getElementsByClassName('block2');
for(let i = 0; i < items.length; i++){
	items[i].style.left = 0 + i*2160 + "px";
}
let dots = document.getElementsByClassName("dot");
for(let j = 0; j < dots.length; j++){
	dots[j].addEventListener("click", function(){
		for(let i = 0; i < items.length; i++){
			items[i].style.left = 0-2160*j + i*2160 + "px";
		}
	})
}