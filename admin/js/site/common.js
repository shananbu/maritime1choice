Common = {
    showOverlay: function() {
        var docHeight = $(document).height();

        $("body").append("<div id='overlay'></div>");

        $("#overlay")
            .height(docHeight)
            .css({
                'opacity': 0.4,
                'position': 'absolute',
                'top': 0,
                'left': 0,
                'background-color': 'black',
                /*                'background-image': 'url(images/ajaxloader.gif)',
                 'background-repeat': 'no-repeat',*/
                'width': '100%',
                'z-index': 5000
            });
    },

    hideOverlay: function() {
        $("#overlay").remove();
    }
}

