var BlankonSignProjectManagement = function () {

    return {

        // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            BlankonSignProjectManagement.signBackstretch();
        },

        // =========================================================================
        // BACKSTRETCH
        // =========================================================================
        signBackstretch: function () {
            // Duration is the amount of time in between slides,
            // and fade is value that determines how quickly the next image will fade in
            $.backstretch([
                // 'http://s1.thingpic.com/images/gf/oGkf1FeQCUj11ST2RL9qug1a.jpeg',
                'https://www.jinnah.edu/wp-content/uploads/2014/06/university-background-06.jpg'
            ], {duration: 2000, fade: 1000});
        }

    };

}();

// Call main app init
BlankonSignProjectManagement.init();