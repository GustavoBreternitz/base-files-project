@extends('adm::layouts.master')

@section('styles')
<style>
  .schedule-card {
    max-width: 500px;
    width: 100%;
  }

  .schedule-time {
    font-weight: 500;
    color: var(--bs-primary);
    display:flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 1rem;
  }

  .schedule-time::before {
    content: '';
    width: 8px;
    height: 8px;
    border-radius: 4px;
    display: block;
    background-color: var(--bs-primary);
  }

  .schedule-process {
    font-weight: 800;
    font-size: 1.125rem;
  }

  .schedule-user-name {
    font-size: 1rem;
    color: var(--bs-gray-dark);
  }

  /* Fullcalendar Styles */
  .fc-timegrid-event {
    cursor: pointer;
    transition: all 0.2s ease-in;
  }

  .fc-timegrid-event:hover {
    transform: scale(1.3)
  }
  
  .fc-button-group .fc-button.fc-button-primary {
    border-radius: 0.5rem;
  }

  .modal {
    position: fixed;
    inset: 0;
    background-color: rgba(0, 0, 0, 0.5);
  }

</style>
@endsection

@section('content')
<div class="home-header mb-3">
  <h2 class="title">Seja bem-vindo!</h2>
  <p class="description">Este é seu painel para gerenciar agendamentos,<br/>usuários, procedimentos e grade de horários, faça bom proveito!</p>
</div>
<div class="home-content d-flex justify-content-between" style="gap: 3rem">
  <div class="calendar-wrapper" style="flex: 1;">
    <h2 class="title">Agenda</h2>
    <div id="calendar" class="box bg-white w-100 p-4 position-relative"></div>
  </div>

  <aside class="today-schedules">
    <h2 class="title">Seus agendamentos para hoje</h2>
    <div class="schedule-card box p-4 bg-white">
      <span class="schedule-time">09:30 ~ 11:30</span>
      <span class="d-block schedule-process my-2">Microagulhamento</span>
      <span class="d-block schedule-user-name">Lívia Gonsalves</span>
    </div>
  </aside>

</div>
@endsection

@section('modal')
<div id="modal-add-schedule" class="modal d-flex d-none align-items-center justify-content-center">
  <div class="modal-content w-75 h-75 bg-white m-auto border-0 box p-5">
    <h2 class="title">Adicionar agendamento</h2>
  </div>
</div>
@endsection


@section('scripts')
<script>
  $(document).ready(function() {
    // Criação do calendário
    const calendarEl = $('#calendar')[0];
    const calendar = new FullCalendar.Calendar(calendarEl, {
      navLinks: true,
      allDaySlot: false,
      initialView: 'timeGridWeek',
      locale: 'pt-br',
      slotMinTime: '07:00:00',
      slotMaxTime: '20:00:00',
      slotDuration:'00:30:00',
      slotLabelFormat: {
        hour: '2-digit',
        minute: '2-digit',
        hour12: false,
        omitZeroMinute: false,
        merideiem: 'narrow'
      },
      slotLabelInterval: 30,
      events: [
        {
          title: 'Teste',
          start: '2022-05-11T09:00:00',
          end: '2022-05-11T10:30:00'
        },
        {
          title: 'Teste 2',
          start: '2022-05-11T11:00:00',
          end: '2022-05-11T12:00:00'
        }
      ],
      customButtons: {
        addButton: {
          class: 'fc-button-active',
          text: 'Adicionar',
          click: function() {
            // alert('clicked the custom button!');
          }
        }
      },
      headerToolbar: {
        left: 'dayGridMonth,timeGridWeek',
        center: 'title',
        right: 'addButton'
      },
      footerToolbar: {
        right: 'prev,next'
      },
      dateClick: function(info) {
        console.log(info);
      },
      height: 1170
    });

    calendar.render();
    
    // Customiazção do calendário
    const addButton = $('.fc-addButton-button')   
    addButton.addClass('fc-button-active')    
    addButton.parent().css({position: 'absolute', right: '1.5em'})

    const modal = $('#modal-add-schedule')

    addButton.prepend('<i class="fas fa-plus"></i>')
    
    addButton.on('click', function() {
      modal.toggleClass('d-none');
    });
  });

</script>
@endsection

@include('adm::home.javascript.index')
