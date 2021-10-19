(function ($) {
 "use strict";
            c3.generate({
                bindto: '#pie',
                data:{
                    columns: [
                        ['Male', 30],
                        ['Female', 120]
                    ],
                    colors:{
                        Male: '#006DF0',
                        Female: '#933EC5'
                    },
                    type : 'pie',
                    groups: [
                        ['Male', 'Female']
                    ]
                }
            });



})(jQuery);
