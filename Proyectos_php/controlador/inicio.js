document.addEventListener('DOMContentLoaded', function() {
    const fecha_inicio_contrato = new Date('2023-01-01'); 
    const fecha_fin_contrato = new Date('2024-12-31'); 
    const fecha_hoy = new Date(); 

    const duracion_contrato = Math.ceil((fecha_fin_contrato - fecha_inicio_contrato) / (1000 * 60 * 60 * 24)) + ' días';
    document.getElementById('duracion_contrato').textContent = duracion_contrato;

    const tiempo_trabajado = Math.ceil((fecha_hoy - fecha_inicio_contrato) / (1000 * 60 * 60 * 24)) + ' días';
    document.getElementById('tiempo_trabajado').textContent = tiempo_trabajado;

    document.getElementById('fecha_fin_contrato').textContent = fecha_fin_contrato.toLocaleString('es-ES', {day:'numeric', month: 'long', year: 'numeric' });

    const calendario = document.getElementById('calendario');
    let fecha_actual = new Date(fecha_inicio_contrato);
    
    while (fecha_actual <= fecha_fin_contrato) {
        const casilla_mes = document.createElement('calendario');
        casilla_mes.className = 'mes';
        
        const monthName = document.createElement('calendario');
        monthName.className = 'nombre_mes';
        monthName.textContent = fecha_actual.toLocaleString('es-ES', { month: 'long', year: 'numeric' });
        casilla_mes.appendChild(monthName);

        const casilla_dias = document.createElement('calendario');
        casilla_dias.className = 'dias';
        
        const primer_dia_mes = new Date(fecha_actual.getFullYear(), fecha_actual.getMonth(), 1);
        
        const ultimo_dia_mes = new Date(fecha_actual.getFullYear(), fecha_actual.getMonth() + 1, 0);

        
        for (let i = 0; i < primer_dia_mes.getDay(); i++) { 
            const dia_blanco = document.createElement('calendario');
            dia_blanco.className = 'dia';
            casilla_dias.appendChild(dia_blanco);
        }

        
        for (let i = primer_dia_mes.getDate(); i <= ultimo_dia_mes.getDate(); i++) {
            const dia = document.createElement('calendario');
            dia.className = 'dia';
            dia.textContent = i;

            const fecha = new Date(fecha_actual.getFullYear(), fecha_actual.getMonth(), i);

            
            if (fecha <= fecha_hoy) {
                dia.classList.add('trabajado');
            }

        
            if (fecha.toDateString() === fecha_hoy.toDateString()) {
                dia.classList.add('fecha_hoy');
            }

            casilla_dias.appendChild(dia);
        }

        casilla_mes.appendChild(casilla_dias);
        calendario.appendChild(casilla_mes);

    
        fecha_actual.setMonth(fecha_actual.getMonth() + 1);
        fecha_actual.setDate(1);
    }
});