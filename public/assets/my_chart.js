const ctx = document.getElementById('myChart');
const ctxx = document.getElementById('myChart2');
const ctxxx = document.getElementById('myChart3');
Chart.defaults.font.size = 13;
Chart.defaults.font.family = 'Montserrat';



  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'],
      datasets: [{
        label: 'Number of Views',
        data: [121, 57, 65, 71, 42, 101,57],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  new Chart(ctxx, {
    type: 'bar',
    data: {
      labels: ['5.0', '4.0', '3.0', '2.0', '1.0'],
      datasets: [{
        label: 'Ratings',
        data: [121, 57, 65, 71, 42],
        backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 205, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(201, 203, 207, 1)'
          ],
        borderWidth: 1,
        borderRadius: 20,
        borderSkipped: false,
        barPercentage: 0.5
      }]
    },
    options: {
        plugins: {
            legend: {
              display: false
            }
          },
        indexAxis: 'y',
      scales: {
        x: {
            grid: {
              display: false
            }
          },
          y: {
            grid: {
              display: false
            }
          }
      }
    }
  });

  new Chart(ctxxx, {
    type: 'doughnut',
    data: {
      labels: ['Follower', 'Non-Follower'],
      datasets: [{
        label: '# of Account Engaged',
        data: [121, 57],
        borderWidth: 1
      }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    
                    font: {
                        size: 20
                    }
                }
            }
        },
        rotation: -90,
    circumference: 180,
      scales: {
        
        x: {
            display:false,
            grid: {
              display: false
            }
            
          },
          y: {
            display:false,
            grid: {
              display: false
            }
          }
      }
    }
  });