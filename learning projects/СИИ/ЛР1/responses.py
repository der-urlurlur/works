# -*- coding: utf-8 -*-
"""
Created on Tue Apr  6 10:37:29 2021

@author: Jester
"""
import pandas as pd
import numpy as np
from sklearn import preprocessing
import scipy.stats as ss
from sklearn.preprocessing import StandardScaler
from sklearn.preprocessing import MinMaxScaler
#грузим фрейм
dataresponses=pd.read_csv('responses.csv')
datacolumns=pd.read_csv('columns.csv')

#первые 10 строк
print("__________________________________")
print('Первые 10 строк')
print(dataresponses.iloc[:10])
print("__________________________________")
print('удаление дубликатов')
dataresponses.drop_duplicates(inplace=True)

#Создаем пустой датафрейм и заполняем
dataframe2 = pd.DataFrame()
dataframe2['type']=['cat','dog']
dataframe2['color']=['grey','black']
dataframe2['weight']=['13','5']


#добавляем новый элемент
new_person=pd.Series(['sparrow','multicolor','1'])
dataframe2.append(new_person,ignore_index=True)
print("__________________________________")


print('Размерность')
print(dataresponses.shape)
print('удаление дубликатов')
dataresponses.drop_duplicates(inplace=True)
print('Размерность')
print(dataresponses.shape)
print("__________________________________")


print('описательная статистика сохранена')
ddescr = dataresponses.describe()
print("__________________________________")


print('Индекс задан')
dataframe2 = dataframe2.set_index(dataframe2['type'])
print("__________________________________")


#выборка
print('Выборка')
filt = dataresponses[(dataresponses['Smoking']=='current smoker')&(dataresponses['Alcohol']=='drink a lot')&(dataresponses['Age']<18)]
print(filt.count)
print(filt)
print("__________________________________")


#замена
print('замена "3" на "indifferent"')
df = dataresponses.replace(3,'indifferent')
print("__________________________________")

print("максимальный возраст")
print(dataresponses['Age'].max())
print("минимальный возраст")
print(dataresponses['Age'].min())
print("среднее")
print(dataresponses['Age'].mean())
print("сумма")
print(dataresponses['Age'].sum())
print("количество")
print(dataresponses['Gender'].count())
print("__________________________________")

print("список уникальных значений")
print(dataresponses['Age'].value_counts())

print("__________________________________")


print("отбор пропущеных значений")
print(dataresponses[dataresponses['Age'].isnull()])
miss = [i for i in dataresponses.columns if dataresponses[i].isna().sum() != 0]    
for i in miss:
    print(i, dataresponses[i].isna().sum())


print(df)
print("__________________________________")
print("Нормирование (cкалирование)")
feature= [[1, 1, 1, 1, 1],
          [2, 5, 10, 50, 100],
          [3, 10, 20, 150, 200],
          [4, 15, 40, 200, 300]]


scaler = MinMaxScaler()
print(scaler.fit(feature))
print(scaler.data_max_)
print(scaler.transform(feature))
feature=scaler.transform(feature)
print("__________________________________")

dscale = pd.DataFrame(feature, columns=['N0', 'N1', 'N2', 'N3', 'N4']).astype('float64')

scaler = StandardScaler()
stdrzd = scaler.fit_transform(dscale)
print(stdrzd)