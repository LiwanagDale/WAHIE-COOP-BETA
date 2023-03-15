import { transition, state, trigger, animate, style } from '@angular/animations';

export let formState = trigger('formState', [
    state('hide', style({
      opacity: 0,
      display: 'none',
    })),
    state('show', style({
      opacity: 1,
     
    })),
    transition('show <=> hide', animate('1500ms ease-in-out', style({ opacity: 0, transform: 'translateX(200px)'  })))
  ])

  export let formState2 =  trigger('formState2', [
    state('hide', style({
      opacity: 1,
      display: 'none',
    })),
    state('show', style({
      opacity: 1,
      
    })),
    transition('show <=> hide', animate('1500ms ease-in-out', style({ opacity: 1, transform: 'translateX(-420px)'  })))
  ])

  export let formState3 = trigger('formState3', [
    state('hide', style({
      opacity: 0,
      display: 'none',
    })),
    state('show', style({
      opacity: 1,
      display: 'block',
    })),
    transition('show <=> hide', animate('1500ms  ease-in-out', style({ opacity: 0, transform: 'translateX(-190px)'  })))
  ])

  export let formState4 = trigger('formState4', [
    state('hide', style({
      opacity: 0,
      display: 'none',
    })),
    state('show', style({
      opacity: 1,
     
    })),
    transition('show <=> hide', animate('1500ms ease-in-out', style({ opacity: 1, transform: 'translateX(420px)'  })))
  ])

  export let formState5 = trigger('formState5', [
    state('hide', style({
      opacity: 0,
      display: 'none',
    })),
    state('show', style({
      opacity: 1,
     
    })),
    transition('show <=> hide', animate('500ms ease-in-out', style({ opacity: 1, transform: 'translateX(0px)'  })))
  ])

  export let fade = trigger('fade', [
      transition(':enter', [
        style({ opacity: 0 }),
        animate(1000, style({ opacity: 1 }))
      ]),
      transition(':leave', [
        style({ opacity: 1 }),
        animate(1000, style({ opacity: 0 }))
      ])
    ])