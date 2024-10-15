<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    /* display: flex;
    align-items: center;
    justify-content: center;
    min-height:100vh; */
    background: #F1F4FD;
}

.container {
    max-width: 1200px;
    width: 95%;
}

.slider-wrapper {
    position: relative;
}

.slider-wrapper .slide-button {
    position: absolute;
    top: 50%;
    height: 50px;
    width: 50px;
    color: #fff;
    border: none;
    outline: none;
    background: #000;
    font-size: 2.2rem;
    cursor: pointer;
    border-radius: 50%;
    transform: translateY(-50%);
}

.slider-wrapper .slide-button:hover {
    background: #444;
}

.slider-wrapper .slide-button#prev-slide {
    left: -20px;
    display: none;
}

.slider-wrapper .slide-button#next-slide {
    right: -20px;
}


.slider-wrapper .image-list{
    display: grid;
    gap: 20px;
    font-size: 0;
    margin-bottom: 30px;
    overflow-x: auto;
    scrollbar-width: none;
    grid-template-columns: repeat(10,1fr);
}

.slider-wrapper .image-list::-webkit-scrollbar{
    display: none;

}

.slider-wrapper .image-list .image-item{
    width: 325px;
    height: 400px;
    object-fit: cover;
}

.container .slider-scrollbar {
    height: 24px;
    width: 100%;
    display: flex;
    align-items: center;
}

.slider-scrollbar .scrollbar-track {
    height: 2px;
    width: 100%;
    background: #ccc;
    position: relative;
    border-radius: 4px;
}

.slider-scrollbar:hover .scrollbar-track {
    height: 4px;
}

.slider-scrollbar .scrollbar-thumb {
    position: absolute;
    height: 100%;
    width: 50%;
    background: #000;
    border-radius: inherit;
    cursor: grab;
}

.slider-scrollbar .scrollbar-thumb:active {
    cursor: grabbing;
    height: 8px;
    top: -2px;
}

.slider-scrollbar .scrollbar-thumb::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: -10px;
    bottom: -10px;
}

@media (max-width: 1023px){
    .slider-wrapper .slide-button {
        display: none !important;
    }

    .slider-wrapper .image-list{
        gap: 10px;
        margin-bottom: 15px;
    }

    .slider-wrapper .image-list .image-item{
        width: 280px;
        height: 380px;
    }

    .slider-scrollbar .scrollbar-thumb {
        width: 20%;
    }
}
</style>