/**
 * Created by Fraxy on 10/3/2014.
 */
// Déclaration variables pour chrono
var centi = 0 ;// initialise les dixtièmes
var secon = 0 ;//initialise les secondes
var statut_chrono = true;



function random(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}
// fonction tri

if( typeof helper == 'undefined' ) {
    var helper = { } ;
}

helper.arr = {
    /**
     * Function to sort multidimensional array
     *
     * param {array} [arr] Source array
     * param {array} [columns] List of columns to sort
     * param {array} [order_by] List of directions (ASC, DESC)
     * returns {array}
     */
    multisort: function(arr, columns, order_by) {
        if(typeof columns == 'undefined') {
            columns = [];
            for(x=0;x<arr[0].length;x++) {
                columns.push(x);
            }
        }

        if(typeof order_by == 'undefined') {
            order_by = [];
            for(x=0;x<arr[0].length;x++) {
                order_by.push('ASC');
            }
        }

        function multisort_recursive(a,b,columns,order_by,index) {
            var direction = order_by[index] == 'DESC' ? 1 : 0;

            var is_numeric = !isNaN(a[columns[index]]-b[columns[index]]);

            var x = is_numeric ? a[columns[index]] : a[columns[index]].toLowerCase();
            var y = is_numeric ? b[columns[index]] : b[columns[index]].toLowerCase();

            if(x < y) {
                return direction == 0 ? -1 : 1;
            }

            if(x == y)  {
                return columns.length-1 > index ? multisort_recursive(a,b,columns,order_by,index+1) : 0;
            }

            return direction == 0 ? 1 : -1;
        }

        return arr.sort(function (a,b) {
            return multisort_recursive(a,b,columns,order_by,0);
        });
    }
};


//Fonction jeux
var nb_tour = 0;
var nb_tours_max = 40;

//Fonction log
var couleur_log ;
