<x-app-layout title="about">
    about page

    <Form action="/about" method="post">
        @csrf
        <button type="submit">send</button>
    </Form>
</x-app-layout>
