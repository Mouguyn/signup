<?php
public function login(Request $request)
{
  $this->validate($request, [
      'email'           => 'required|max:255|email',
      'password'           => 'required|confirmed',
  ]);

      return redirect()->intended('/panel');

}
?>