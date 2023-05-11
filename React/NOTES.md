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
```jsx
/// Hijos.jsx
import {useContext} from 'react';
import userContext from '../App.jsx'
const user = useContext(userContext)
return (
	<p>{user}</p>
)
```

### useRef
Sirve para guardar una referencia que tiene como caracteristica la "permanecia" osea que sin importar que se recargue el componente el valor persiste, uso:
```jsx
import {useRef} from 'react';

const inputRef = useRef()

const toggleValue = () => {
	console.log(inputRef.current.value)
}

return (
	<>
		<input type="text" ref={inputRef} />
		<button onClick={toggleValue}></button>
	</>
)
```

### UseReducer
Hook encargardo de cambiar el estado como un useState pero con la diferencia de que implementa una cabezera o  `type:{}` la cual sirve para hacer diferentes acciones en a la hora de usar un formulario.

Abstract API
1908d62f010349bc9fb7fa92c76f8331
https://app.abstractapi.com/api/timezone/documentation