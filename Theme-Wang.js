/*
幻灯片区JS
*/



// 声明$选择功能
let $ = document.querySelectorAll.bind(document)

// 定时自动播放
let sliderTime = setInterval(nextPlay,6000)

const len = $('.slider ul li').length
// 初始值为0
let n = 0;

// 幻灯片翻页按钮
// 向前翻页
$('.slider .pre')[0].onclick = function(){
	clearInterval(sliderTime);
	prePlay();
	sliderTime = setInterval(nextPlay,6000)
}

// 向后翻页
$('.slider .next')[0].onclick = function(){
	clearInterval(sliderTime);
	nextPlay();
	sliderTime = setInterval(nextPlay,6000)
}


// 向前翻页功能
function prePlay() {
	if(n==0){
		// 从第一张返回最后一张
		n = len
	}
	n--;
	// j为slide区ul设置的长度
	$('.slider ul ')[0].style.left = (-j) * n + 'vw'
}


// 向后翻页功能
function prePlay() {
	n++;
	if(n == len){
		// 从第一张返回最后一张
		n = 0
	}
	// j为slide区ul设置的长度
	$('.slider ul ')[0].style.left = (-j) * n + 'vw'
}