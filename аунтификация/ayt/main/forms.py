from .models import *
from django import forms
from django.forms import ModelForm, TextInput

class userform(ModelForm):
    class Meta:
        model = User
        fields = ['last_name', 'name', 'middle_name', 'username', 'password']

        widgets = {
            "last_name": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'Фамилия'
            }), 
            "name": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'Имя'
            }), 
            "middle_name": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'Отчество'
            }), 
            "username": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'Логин'
            }), 
            "password": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'Пароль'
            }), 
        }


class LoginForm(forms.ModelForm):
    class Meta:
        model = User
        fields = ['username', 'password']
        widgets = {
            'password': forms.PasswordInput(),
        }
