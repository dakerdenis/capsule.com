<div>
    <div class="services__name__add">
        <h2>Авто сервисы</h2>
        <a class="btn btn-secondary" href="{{ route('admin.add_service') }}">Добавление сервиса</a>
    </div>

    <div class="services__wrapper">
        <table class="main__table table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название</th>
                    <th scope="col">Сотрудничество</th>
                    <th scope="col">Кол-во продуктов</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr class="{{ $service->cooperation == 1 ? 'cooperation' : '' }}">
                        <th scope="row">{{ $service->id }}</th>
                        <td>
                            <a href="{{ route('admin.service', ['id' => $service->id]) }}">{{ $service->name }}</a>
                        </td>
                        <td>{{ $service->cooperation == 1 ? 'Да' : 'Нет' }}</td>
                        <td>{{ count($service->list_of_products) }}</td>
                        <td>
                            <a href="{{ route('admin.edit_service', ['id' => $service->id]) }}">
                                <img src="{{ asset('images/edit.svg') }}" alt="Edit" class="delete_image">
                            </a>

                        </td>
                        <td>
                            <button class="delete_image-button" data-service-id="{{ $service->id }}"
                                data-service-name="{{ $service->name }}">
                                <img src="{{ asset('images/trash.svg') }}" alt="" class="delete_image">
                            </button>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Delete Confirmation Popup -->
    <div id="delete-popup" class="popup hidden">
        <div class="popup-content">
            <h3>Вы уверены, что хотите удалить сервис?</h3>
            <p id="service-name"></p>
            <div class="popup-actions">
                <form id="delete-service-form" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Да</button>
                </form>
                <button id="cancel-delete" class="btn btn-secondary">Нет</button>
            </div>
            <button id="close-popup" class="popup-close">X</button>
        </div>
    </div>
</div>

<!-- Include CSS -->
<style>
    .popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1000;
        display: none;
        /* Start hidden by default */
    }

    .popup.active {
        display: flex;
        /* Show popup when the active class is applied */
    }

    .popup-content {
        background: white;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        position: relative;
    }

    .popup-close {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 18px;
        cursor: pointer;
    }
</style>

<!-- Include JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const popup = document.getElementById('delete-popup');
        const serviceName = document.getElementById('service-name');
        const deleteForm = document.getElementById('delete-service-form');
        const cancelDelete = document.getElementById('cancel-delete');
        const closePopup = document.getElementById('close-popup');

        document.querySelectorAll('.delete_image-button').forEach(button => {
            button.addEventListener('click', () => {
                const serviceId = button.getAttribute('data-service-id');
                const serviceNameText = button.getAttribute('data-service-name');

                // Set the service name in the popup
                serviceName.textContent = serviceNameText;

                // Set the action URL for the form dynamically
                deleteForm.action = `{{ route('admin.delete_service', ['id' => ':id']) }}`
                    .replace(':id', serviceId);

                // Show the popup
                popup.classList.add('active');
            });
        });

        // Cancel deletion
        cancelDelete.addEventListener('click', () => {
            popup.classList.remove('active');
        });

        // Close popup on clicking the "X"
        closePopup.addEventListener('click', () => {
            popup.classList.remove('active');
        });

        // Optional: Close popup when clicking outside the content area
        popup.addEventListener('click', (event) => {
            if (event.target === popup) {
                popup.classList.remove('active');
            }
        });
    });
</script>
