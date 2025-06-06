document.addEventListener('DOMContentLoaded', () => {
  const container = document.createElement('div');
  container.className = 'fabify-buttons';
 
  const buttons = [
    {
      id: 'scroll-top',
      icon: '⬆️',
      title: 'Nach oben scrollen',
    },
    {
      id: 'contact',
      icon: '✉️',
      title: 'Kontakt öffnen'
    },
    {
      id: 'menu',
      icon: '☰',
      title: 'Menü anzeigen'
    }
  ]

});

/*

  buttons.forEach(({ id, icon, title }) => {
    const btn = document.createElement('button');
    btn.className = 'fabify-button';
    btn.innerText = icon;
    btn.title = title;
    btn.setAttribute('data-fab-action', id);
    container.appendChild(btn);
  });

  document.body.appendChild(container);

  container.addEventListener('click', (e) => {
    const button = e.target.closest('.fabify-button');
    if (!button) return;

    const action = button.getAttribute('data-fab-action');
    handleFabAction(action);
  });
});

function handleFabAction(action) {
  switch (action) {
    case 'scroll-top':
      window.scrollTo({ top: 0, behavior: 'smooth' });
      break;
    case 'contact':
      window.location.href = '#contact'; 
      break;
    case 'menu':
      alert('Menü wurde geöffnet (Demo-Funktion)');
      break;
    default:
      console.warn('Unbekannte Aktion:', action);
  }
}

*/