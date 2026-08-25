function preloadImages(array) {
    if (!preloadImages.list) {
        preloadImages.list = [];
    }
    var list = preloadImages.list;
    for (var i = 0; i < array.length; i++) {
        var img = new Image();
        img.onload = function() {
            var index = list.indexOf(this);
            if (index !== -1) {
                // remove image from the array once it's loaded
                // for memory consumption reasons
                list.splice(index, 1);
            }
        }
        list.push(img);
        img.src = array[i];
    }
}

preloadImages(["portraits/marnix-1.jpg", "portraits/marnix-2.jpg", "portraits/marnix-3.jpg", "portraits/marnix-4.jpg", "portraits/marnix-5.jpg", "portraits/marnix-6.jpg", "portraits/harmen-1.jpg", "portraits/harmen-2.jpg", "portraits/harmen-3.jpg", "portraits/harmen-4.jpg", "portraits/harmen-5.jpg", "portraits/harmen-6.jpg", "portraits/marnix-6.jpg", "portraits/peter-1.jpg", "portraits/peter-2.jpg", "portraits/peter-3.jpg", "portraits/peter-4.jpg", "portraits/peter-5.jpg", "portraits/peter-6.jpg"]);
