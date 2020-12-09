const seccionesPagina = new fullpage('#fullpage', {
    autoScrolling:true,
    fitToSection:false,
    fitToSectionDelay:300,
    easing: 'easeInOutCubic',
    scrollingSpeed: 500,
    css3: true,
    easingcss3: 'ease-out',
    loopBottom:true,
    navigation: true, // Muesta la barra de navegación.
    menu: '#menu', // Menu de navegación.
    anchors: ['uno', 'dos','tres','cuatro'], // Anclas, las usamos para identificar cada seccion y poder acceder a ellas con el menu.
    navigationTooltips: ['Uno', 'Dos','Tres', 'Cuatro'] // Tooltips que mostrara por cada boton.
    
    });