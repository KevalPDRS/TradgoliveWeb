
document.getElementById('RechargeHistoryStatusFilter').addEventListener('change', function () {
    var selectedValue = this.value;
    var FilterItems = document.querySelectorAll('.FilterItems');

    FilterItems.forEach(function (item) {
        var category = item.getAttribute('data-category');
        if (selectedValue === 'all' || selectedValue === category) {
            item.style.display = 'table-row'; // Show item if it matches the selected category or if 'Show All' is selected
        } else {
            item.style.display = 'none'; // Hide item if it doesn't match the selected category
        }
    });
});

// Get all table rows
var rows = document.querySelectorAll('#RechargeHistoryStatusFilterItems tr');

// Add click event listener to each row
rows.forEach(function (row) {
    row.addEventListener('click', function () {
        var link = this.getAttribute('data-link');
        if (link) {
            window.location.href = link; // Redirect to the specified page link
        }
    });
});

// Filter By Status -----------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    var filterOptions = document.getElementById('filterOptions');

    if (filterOptions) {
        filterOptions.addEventListener('change', function () {
            var selectedValue = this.value;
            var items = document.querySelectorAll('.item');

            items.forEach(function (item) {
                var category = item.getAttribute('data-category');
                if (selectedValue === 'all' || selectedValue === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }
});

// // For Date
// $('#rangestart').calendar({
//     type: 'date',
//     endCalendar: $('#rangeend')
// });
// $('#rangeend').calendar({
//     type: 'date',
//     startCalendar: $('#rangestart')
// });

// Filter By Balance -----------------------------------------------------------------
function sortAndDisplayDivs(order) {
    const outputDiv = document.getElementById('TopupReceiveReportBalnceFilterItems');
    const divs = Array.from(outputDiv.children);

    const sortedDivs = divs.sort((a, b) => {
        const valueA = parseInt(a.getAttribute('data-value'));
        const valueB = parseInt(b.getAttribute('data-value'));
        return order === 'StatusBalanceHighToLow' ? valueB - valueA : valueA - valueB;
    });

    // Append the sorted divs back to the outputDiv
    sortedDivs.forEach(div => {
        outputDiv.appendChild(div);
    });
}

function applySorting() {
    const filterOption = document.getElementById('TopupReceiveReportBalanceFilter').value;
    sortAndDisplayDivs(filterOption);
}

window.onload = function () {
    applySorting(); // Sort divs on page load
};

// Listen for change in select dropdown to trigger sorting
document.getElementById('TopupReceiveReportBalanceFilter').addEventListener('change', applySorting);
