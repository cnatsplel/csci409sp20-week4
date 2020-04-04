<form method="POST" action="/hotels/store">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name"><br>
    <label for="address1">Address 1:</label>
    <input type="text" name="address1"><br>
    <label for="address2">Address 2:</label>
    <input type="text" name="address2"><br>
    <label for="city">City:</label>
    <input type="text" name="city"><br>
    <label for="state">State:</label>
    <input type="text" name="state"><br>
    <label for="zip">Zip:</label>
    <input type="text" name="zip"><br>
    <label for="description">Description:</label>
    <input type="text" name="description"><br>
    <label for="image">Image:</label>
    <input type="text" name="image"><br>
    <input type="submit" name="submit">
</form>
