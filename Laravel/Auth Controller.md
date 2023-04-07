
## Modulo para Registrarse

```php
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json(['message' => "invalid login"], 401);
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'USER'
            ]);
            $responseData = [
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role
            ];
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json($responseData, 200);

        } catch (\Exception $e) {
            return response()->json(['message' => "invalid login"], 401);
        }

    }
```

## Modulo Login

```php
use Illuminate\Support\Facades\Auth;
use App\Models\User;

public function userLogin(Request $request)
{
	try {
		if (!Auth::attempt($request->only('email', 'password'))) {
		    return response()->json(['message' => "Invalid login"], 401);
		}
		$user = User::where('email', $request['email'])->firstOrFail();
		$token = $user->createToken('auth_token')->plainTextToken;
		$response = [
			'role' => $user->role,
		];
		return response($response, 200);
	} catch (\Exception $e) {
		return response()->json(['message' => "Invalid login"], 401);
	}
}

```
