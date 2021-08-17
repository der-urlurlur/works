using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Windows.Forms.DataVisualization.Charting;

namespace porazryad
{
    public partial class Form1 : Form
    {
        double x, D, E;
        public Form1()
        {
            InitializeComponent();
        }
        public static double func(double x)
        {
            return 0.1 * Math.Pow(x, 3) - 2 * Math.Pow(x, 2) + 10 * x;
        }
        private void button1_Click(object sender, EventArgs e)
        {
            x = double.Parse(textBox1.Text);
            D = double.Parse(textBox2.Text);
            E = double.Parse(textBox3.Text);
            double Func, Func1, i = 0, max = 0, xmax = 0;
            bool s = false;
            do
            {
                Func = func(x);
                x += D;
                Func1 = func(x);
                if (Func1 > Func)
                {
                    xmax = x;
                    max = Func1;
                }
                else
                {
                    D = -D / 4;
                    if (Math.Abs(D) > E / 4)
                        continue;
                    else
                        s = true;
                }
                i++;
                richTextBox1.AppendText("x = " + Convert.ToString(x) + "  f(x) = " + Convert.ToString(func(x)) + "\n");
            }
            while (s == false);
            textBox4.Text = Convert.ToString(xmax);
            textBox5.Text = Convert.ToString(max);
            textBox6.Text = Convert.ToString(i);

            for (int j = 0; j < 10; j++)
            {
                chart1.Series[0].Points.AddXY(j, func(j));
            }
        }
    }
}
