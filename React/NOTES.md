### useContext
Hook que sirve para guardar contextos y poderlos usar en los componentes hijos, uso:
```jsx
// App.jsx
import React from 'react';

const userContext = React.createContext();
const user = 'Diego'
return (
	<userContext.Provider value={user}>
		<Hijos />
	<userContext.Provider/>
)
```

### useRef
Sirve para guardar una referencia que tiene como caracteristica la "permanecia" osea que sin importar que se recargue el componente el valor persiste, uso:
```jsx

```

