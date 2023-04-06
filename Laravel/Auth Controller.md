
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
