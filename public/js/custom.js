document.querySelectorAll('area').forEach(area => {
    area.addEventListener('mouseover', function(e) {
        const tooltip = document.getElementById('tooltip');
        tooltip.style.display = 'block';
        tooltip.textContent = this.getAttribute('data-tooltip');
    });

    area.addEventListener('mousemove', function(e) {
        const tooltip = document.getElementById('tooltip');
        tooltip.style.left = e.pageX + 10 + 'px';
        tooltip.style.top = e.pageY + 10 + 'px';
    });

    area.addEventListener('mouseout', function() {
        document.getElementById('tooltip').style.display = 'none';
    });
});
