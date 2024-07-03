from django.shortcuts import render, redirect
from .models import *
from .forms import *

def ayt(request):
    if request.method == 'POST':
        form = LoginForm(request.POST)
        if form.is_valid():
            username = form.cleaned_data['username']
            password = form.cleaned_data['password']
            user = User.objects.filter(username=username, password=password).first()
            if user:
                return redirect('ac')
            else:
                form.add_error(None, 'Invalid username or password')
    else:
        form = LoginForm()

    return render(request, 'main/index.html', {'form': form})

def register(request):
    error = ''
    if request.method == 'POST':
        form = userform(request.POST)
        if form.is_valid():
            form.save()
            return redirect('login')
        else:
            error = 'Форма заполнена не верно'
    form = userform()
    data = {
        'form':form,
        'error':error,
    }
    return render(request, 'main/reg.html', data) 


def acount(request):
    return render(request, 'main/acount.html')




