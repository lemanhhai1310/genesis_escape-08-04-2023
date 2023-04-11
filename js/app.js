console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {
        const slideshow = x('#slideshow');
        function indexInParent(node) {
            var children = node.parentNode.childNodes;
            var num = 0;

            for (var i=0; i<children.length; i++) {
                if (children[i]==node) return num;
                if (children[i].nodeType==1) num++;
            }

            return -1;
        }

        UIkit.util.on('#slide', 'itemshown', function() {
            var $items = this.getElementsByClassName('uk-slider-items');
            var $activeItem = $items[0].getElementsByClassName('uk-active');
            var index = indexInParent($activeItem[0]);
            console.log(index);
            UIkit.slideshow(slideshow).show(index);
            // home__section3.style.setProperty('--url','url(images/guidle'+index+'.jpeg)')
        });
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})