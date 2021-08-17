# -*- coding: utf-8 -*-
"""
Created on Tue Apr  6 12:17:42 2021

@author: Jester
"""

from collections import defaultdict

import pandas as pd
import numpy as np
from sklearn.datasets import load_iris
from sklearn.metrics import accuracy_score
from sklearn.model_selection import train_test_split
import csv
def loadCsv(filename):
    
    lines = csv.reader(open(filename))
    dataset = list(list(lines))
    return dataset

import random
def splitDataset(dataset, splitRatio):
	trainSize = int(len(dataset) * splitRatio)
	trainSet = []
	copy = list(dataset)
	while len(trainSet) < trainSize:
		index = random.randrange(len(copy))
		trainSet.append(copy.pop(index))
	return [trainSet, copy]

def separateByClass(dataset):
	good = {}
	for i in range(len(dataset)):
		vector = dataset[i]
		if (vector[6] not in good):
			good[vector[6]] = []
		good[vector[6]].append(vector)
	return good

import math
def mean(numbers):
	return sum(numbers)/float(len(numbers))

import math
def calculateProbability(x, mean, stdev):
	exponent = math.exp(-(math.pow(x-mean,2)/(2*math.pow(stdev,2))))
	return (1 / (math.sqrt(2*math.pi) * stdev)) * exponent

def stdev(numbers):
	avg = mean(numbers)
	variance = sum([pow(x-avg,2) for x in numbers])/float(len(numbers)-1)
	return math.sqrt(variance)

def summarize(dataset):
	summaries = [(mean(attribute), stdev(attribute)) for attribute in zip(*dataset)]
	del summaries[-1]
	return summaries

def summarizeByClass(dataset):
	separated = separateByClass(dataset)
	summaries = {}
	for classValue, instances in separated:
		summaries[classValue] = summarize(instances)
	return summaries

filename='flavors_of_cacao.csv'
dataset = loadCsv(filename)
dataresponses=pd.read_csv('flavors_of_cacao.csv')
for i in range(1,len(dataset)):
    dataset[i][2]=int(dataset[i][2].strip())
    dataset[i][3]=int(dataset[i][3].strip())
    dataset[i][4]=dataset[i][4][:-1]
    dataset[i][4]=float(dataset[i][4].strip())
    dataset[i][6]=float(dataset[i][6].strip())

train, test = splitDataset(dataset, 0.67)
good = separateByClass(train)
numbers = []
for i in range(1,len(train)):
    numbers.append(train[i][6])


